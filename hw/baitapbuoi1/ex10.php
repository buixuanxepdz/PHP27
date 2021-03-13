<?php
	//chuong trinh tinh tong 1/1!+...+n/n!
	$sum = 0;
	$gt = 1;
	for ($i=1; $i <=10; $i++) { 
		$gt *=$i;
		$sum += $i/($gt);
	}
	echo "Tong day so la: $sum";
 ?>