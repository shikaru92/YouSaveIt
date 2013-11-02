<?php
function stripslashes_deep($data) {
	if (false == get_magic_quotes_gpc() &&
		false == get_magic_quotes_runtime()) {

		return $data;
	}

	if (is_array($data)) {
		return array_map('stripslashes_deep', $data);
	}

	return stripslashes($data);
}