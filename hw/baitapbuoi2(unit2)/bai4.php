<?php
	$name = "    bui xuAn      xep     ";
	$name = strtolower($name);
	$name = trim(preg_replace('/\s+/', ' ', $name));
	// echo strlen($name)
	echo "Ten truoc khi chuan hoa: <br>$name<br>";
	$change="";
	for ($i=0; $i < strlen($name); $i++) {
		
		$change = ucwords($name);	
		$change = $change.".";
	}
	echo "<br>Ten sau khi chuan hoa: <br>$change";
?>