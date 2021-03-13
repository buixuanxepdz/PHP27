<?php
	$sum = 0;
	$count = 0;
	for ($i=0; $i < 30; $i++) { 
		if ($i%2==0) {
			$sum += $i;
			$count++;
			if($count>=10){
				break;
			}
		}
	}
	echo "Tong 10 so chan dau tien la: $sum";
 ?>