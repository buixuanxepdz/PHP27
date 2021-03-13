<?php
	$name = array('XEP',12,1.5);

	var_dump($name);
	echo "<pre>";
		print_r($name);
	echo "</pre>";

	//mang khong tuan tu
	
	$infor_bxx = array();
	$infor_bxx['name']	= 'Xep'; 
	$infor_bxx['age']	= 20; 
	$infor_bxx['phone']	= '023048934'; 
	$infor_bxx['address']	= 'Ha Noi';  

	echo "<br> Ten : " .$infor_bxx['name'];
	echo "<br> Tuoi : " .$infor_bxx['age'];
	echo "<br> Dia chi : " .$infor_bxx['address'];
	echo "<br> Dien thoai : " .$infor_bxx['phone'];

	echo "<pre>";
		print_r($infor_bxx);
	echo "</pre>";

	foreach ($infor_bxx as $key => $value) {
		echo "<br>Key : ".$key."-Value:".$value;
	}
	echo "<br>";
	foreach ($infor_bxx as $key) {			//neu chi co as $key thi vong lap se nhan $value 
		echo "<br>Key : ".$key;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2><?php echo "$name[0]"; ?></h2>
</body>
</html>