<?php
	//phuong trinh bac 2;
	$a = 2;
	$b = 3;
	$c = 1;
	
	if($a == 0){
		if($b == 0){
			echo "Phuong trinh vo nghiem";
		}
		else{
			echo "Phuong trinh co 1 nghiem: " .((-$c)/$b);
		}
	}
	$delta = $b*$b-4*$a*$c;
	$x1;
	$x2;
	if($delta > 0){
		
		$x1 = ((-$b+sqrt($delta))/(2*$a));
		$x2 = ((-$b-sqrt($delta))/(2*$a));
		echo "Phuong trinh co hai nghiem phan biet: <br> x1 = $x1 <br> x2 = $x2";
	}elseif ($delta==0) {	
		$x1 = (-$b)/(2*$a);	//$x1 = $x2
		echo "<br> Phuong trinh co nghiem kep: <br> x = $x1";
	}else{
		echo "Phuong trinh vo nghiem";
	}

 ?>