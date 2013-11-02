<?php
session_start();

define('ROOT', dirname(__FILE__));

require_once ROOT . '/config.php';
require_once ROOT . '/includes/rb.php';
require_once ROOT . '/includes/phpthumb/ThumbLib.inc.php';

require_once ROOT . '/includes/functions-common.php';
require_once ROOT . '/includes/functions-user.php';
require_once ROOT . '/includes/functions-product.php';

// Tao ket noi database
R::setup("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_pass);
// R::debug(true);
