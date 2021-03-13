<?php
	$i;
	$j;
	for ($i=1; $i <= 8; $i++) { 
		for ($j=1; $j <= 8; $j++) { 
			if ($j <= 8-$i) {
				echo " &nbsp&nbsp ";
			}else{
				echo " # ";
			}
		}
		echo "<br>";
	}
?>	