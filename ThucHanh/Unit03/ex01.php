<?php
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";

	$lang = $_GET['lang'];
	
	if ($lang == "vi") {
		echo "Đây là website Tiếng Việt";
	} else if ($lang == "kr") {
		echo "Đây là website tiếng Hàn";
	} else {
		echo "Đây là website Tiếng Anh";
	}
?>