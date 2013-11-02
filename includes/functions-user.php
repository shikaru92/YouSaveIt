<?php
function user_add($data) {
    if (false == is_array($data)) {
    	throw new Exception('Vui lòng nhập đầy đủ thông tin đăng ký');
    }

    if (true == empty($data['name']) ||
    	true == empty($data['email']) ||
    	true == empty($data['password']) ||
    	true == empty($data['re-password']) ||
    	true == empty($data['address']) ||
    	true == empty($data['phone'])) {

    	throw new Exception('Vui lòng nhập đầy đủ thông tin đăng ký');
    }

    if (user_email_existed($data['email'])) {
    	throw new Exception('Email đã tồn tại');
    }

    if ($data['password'] != $data['re-password']) {
    	throw new Exception('Mật khẩu xác nhận không trùng khớp');
    }

    // Lưu thông tin user
    $user = R::dispense('user');
    $user->name    = $data['name'];
	$user->email    = $data['email'];
	$user->password = $data['password'];
	$user->address  = $data['address'];
	$user->phone    = $data['phone'];

	return R::store($user);
}
function user_update($id, $data) {
    
}
function user_delete($id) {
    
}
function user_edit() {
    
}

function user_email_existed($email) {
	$user = R::findOne('user', 'email=:email', array(
		'email' => $email
	));

	return $user != null;
}

/**
 * Kiểm tra xem user đã đăng nhập chưa
 * 
 * @return  boolean
 */
function user_is_logged() {
	return (isset($_SESSION['user']) && false == empty($_SESSION['user']));
}

/**
 * Kiem tra thong tin dang nhap cua nguoi dung
 * 
 * @return  object
 */
function user_verify_login() {
	$data = stripslashes_deep($_POST);
	$user = R::findOne('user', 'email=:email AND password=:password', array(
				'email' => $data['email'],
				'password' => $data['password']
			));

	if ($user == null) {
		throw new Exception('Thông tin đăng nhập không chính xác');
	}

	return $user;
}