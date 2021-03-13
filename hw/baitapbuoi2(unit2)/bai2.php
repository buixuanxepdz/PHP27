<?php
	$mang = array(1,4,22,4827,2642);
	echo "mang khi dua vao la : ";
	echo "<pre>";
		print_r($mang);
	echo "</pre>";
	echo "mang sau khi dao nguoc la : ";
	for ($i = count($mang)-1; $i >=0 ; $i--) { 
		echo "<pre>";
			print_r($mang[$i]);
		echo "</pre>";
	}
?>