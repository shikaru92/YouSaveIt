<?php
function product_get_all() {
	return R::getAll('
		SELECT p.*, u.name as user_name, u.address as user_address, c.name as category_name
		FROM product p
			INNER JOIN user u ON p.user_id=u.id 
			INNER JOIN category c ON p.category_id=c.id 
		ORDER BY p.id DESC');
}

function product_find_by_user($user_id) {
	return R::find('product', 'user_id=:user_id', array('user_id' => $user_id));
}

function product_find_by_id($id) {
	return R::findOne('product', 'id=:id', array('id' => $id));
}

function product_category_options($current = null) {
	$categories = R::find('category', 'status=:status', array('status' => 1));
	$options = array();

	foreach ($categories as $category) {
		$selected  = $current == $category->id ? ' selected="selected"' : '';
		$options[] = "<option value=\"{$category->id}\"{$selected}>{$category->name}</option>";
	}

	return implode('', $options);
}

function product_delete_by_id($id) {
	$product = R::findOne('product', 'user_id=:user_id AND id=:id', array(
		'user_id' => $_SESSION['user']['id'],
		'id' => $id
	));

	if ($product == null)
		return;

	$images = json_decode($product->images, true);

	if (!empty($images)) {
		foreach ($images as $image) {
			@unlink(ROOT . '/upload/' . $image);
			@unlink(ROOT . '/upload/small-' . $image);
			@unlink(ROOT . '/upload/medium-' . $image);
		}
	}

	R::trash($product);
}

function product_process_submit() {
	$data = $_POST;

	if (true == empty($data['category_id'])) {
		throw new Exception('Nhóm sản phẩm không tồn tại');
	}

	if (true == empty($data['name'])) {
		throw new Exception('Tên sản phẩm không được bỏ trống');
	}

	if (true == empty($data['description'])) {
		throw new Exception('Nội dung mô tả sản phẩm không được bỏ trống');
	}

	$images = array();
	$allowedExts = array('png', 'jpg', 'gif');

	// Upload hình sản phẩm
	if (isset($_FILES['images']) && is_array($_FILES['images'])) {
		foreach ($_FILES['images']['error'] as $index => $status) {
			if ($status != 0) continue;

			$fileEx = pathinfo($_FILES['images']['name'][$index], PATHINFO_EXTENSION);
			$name = mt_rand() . '.' . $fileEx;

			if (!in_array($fileEx, $allowedExts)) continue;

			move_uploaded_file(
				$_FILES['images']['tmp_name'][$index],
				ROOT . '/upload/' . $name
			);

			// Create thumbnails
			$thumb = PhpThumbFactory::create(ROOT . '/upload/' . $name);
			$thumb->adaptiveResize(50, 50);
			$thumb->save(ROOT . '/upload/small-' . $name);

			$thumb = PhpThumbFactory::create(ROOT . '/upload/' . $name);
			$thumb->adaptiveResize(200, 150);
			$thumb->save(ROOT . '/upload/medium-' . $name);

			array_push($images, $name);
		}
	}

	if (!empty($data['existed_images']) && is_array($data['existed_images'])) {
		$images = array_merge($images, $data['existed_images']);
	}

	if (isset($data['id']) && is_numeric($data['id'])) {
		$product = R::load('product', $data['id']);

		if ($product != null) {
			$existedImages = json_decode($product->images);

			foreach ($existedImages as $image) {
				if (!in_array($image, $images)) {
					@unlink(ROOT . '/upload/' . $image);
					@unlink(ROOT . '/upload/small-' . $image);
					@unlink(ROOT . '/upload/medium-' . $image);
				}
			}
		}
	}
	else {
		$product = R::dispense('product');
	}

	// Lưu thông tin sản phẩm
	$product->category_id	= intval($data['category_id']);
	$product->user_id		= $_SESSION['user']['id'];
	$product->name			= trim(strip_tags($data['name']));
	$product->description	= trim($data['description']);
	$product->images		= json_encode($images);

	R::store($product);
}