<?php
	function ktrachan_le($number){
		if($number % 2 == 0){
			echo "<br> So chan";
		}else{
			echo "<br> So le";
		}
	}
	$number1 = 10;
	ktrachan_le($number1);
	$number2 = 5;
	ktrachan_le($number2);

	function tinhtong($input){
		$sum = 0;
		foreach ($input as $val) {
			$sum += $val;
		}
		return $sum;
	}
	$arrayName = array(1,2,3,4,5,6);
	echo "<br> Tong : " . tinhtong($arrayName);
?>