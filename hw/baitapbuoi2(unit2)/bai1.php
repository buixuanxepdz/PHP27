<?php
	$arr =  array(1,203,700,20,40,200);
	echo "<pre>";
		print_r($arr);
	echo "</pre>";
	$max = 0;
	for ($i= 0; $i <count($arr); $i++) { 
		if($max < $arr[$i]){
			$max = $arr[$i];
		}
	}
	echo 'Gia  tri lon nhat la: '.$max;
	
?>