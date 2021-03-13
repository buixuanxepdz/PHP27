<?php
	$dayso = array(3,5,12,1,10);
	echo "Mang khi chua sap xep la:";
	echo "<pre>";
		print_r($dayso);
	echo "</pre>";
	sort($dayso);
	echo "Mang sau khi sap xep tang dan la:";
	for ($i=0; $i < count($dayso); $i++) { 
		echo "<br>$dayso[$i]";
	}
?>