<?php
	//phuong trinh bac nhat
	$a = 3;
	$b = 3;
	$x;
	if( $a == 0){
		if($b == 0){
			echo "He phuong trinh co vo so nghiem";
		}
		else{
			echo "He phuong trinh vo nghiem";
		}
	}else{
		$x=(-$b)/$a;
		echo "Phuong trinh co nghiem x = $x";
	}

 ?>