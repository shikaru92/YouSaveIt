<?php
require_once 'common.php';

if (false == isset($_GET['action'])) {
	$_GET['action'] = 'user-cp';
}

switch($_GET['action']) {
	case 'user-cp':
		if (false == user_is_logged()) {
			$return = base64_encode('user.php?action=user-cp');
			
			header('location: user.php?action=login&return=' . $return);
			exit;
		}

		$user = $_SESSION['user'];
		$products = product_find_by_user($user['id']);

		include 'templates/header.php';
		include 'templates/user/user-cp.php';
		include 'templates/footer.php';
	break;

	case 'register':
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			try {
				user_add($_POST);
				header('location: user.php?action=register-success');
				exit;
			}
			catch(Exception $ex) {
				$message = $ex->getMessage();
			}
		}

		include 'templates/header.php';
		include 'templates/user/register.php';
		include 'templates/footer.php';
	break;

	case 'register-success':
		include 'templates/header.php';
		include 'templates/user/register_success.php';
		include 'templates/footer.php';
	break;

	case 'logout':
		unset($_SESSION['user']);
		header('location: index.php');
		exit;
	break;

	case 'login':
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			try {
				$data = $_POST;

				// Check user login
				$user = user_verify_login();
				$_SESSION['user'] = $user->export();

				if (false == empty($data['return'])) {
					header('location: ' . $data['return']);
					exit;
				}

				header('location: user.php?action=user-cp');
				exit;
			}
			catch(Exception $ex) {
				$message = $ex->getMessage();
			}
		}

		include 'templates/header.php';
		include 'templates/user/login.php';
		include 'templates/footer.php';
	break;
}