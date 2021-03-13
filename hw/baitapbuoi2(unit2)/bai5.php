<?php
	$name = "Bui Xuan  Xep";
	echo "Ten truoc khi chua tach: <br>$name<br>";
	$data = explode(" ",$name);
	$sopt = count($data);
	$ho = $data[0];
	$ten = $data[$sopt-1];
	$hodem = " ";
	for ($i=1; $i < ($sopt-1); $i++) {
		 	$hodem = $hodem.$data[$i]." ";
	}
	echo "<br>Sau khi tach :";
	echo "<br>Ho : $ho";
	if ($hodem == " ") {
		echo "<br>Ho dem : ko co ten dem";
	} else {
		echo "<br>Ho dem : $hodem";
	}
	echo "<br>Ten : $ten";
?>