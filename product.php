<?php
require_once 'common.php';

if (false == user_is_logged()) {
	header('location: user.php?action=login');
	exit;
}

if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'add':
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				try {
					product_process_submit();
					header('location: user.php?action=user-cp');
				}
				catch (Exception $ex) {
					$product = (object) $_POST;
					$message = $ex->getMessage();
				}
			}

			include 'templates/header.php';
			include 'templates/product/form.php';
			include 'templates/footer.php';
		break;

		case 'edit':
			if (isset($_GET['id'])) {
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					product_process_submit();
					header('location: user.php?action=user-cp');
				}
				
				$product = product_find_by_id(intval($_GET['id']));

				include 'templates/header.php';
				include 'templates/product/form.php';
				include 'templates/footer.php';
			}
		break;

		case 'delete':
			if (isset($_GET['id'])) {
				product_delete_by_id(intval($_GET['id']));
				header('location: user.php?action=user-cp');
			}
		break;
	}
}