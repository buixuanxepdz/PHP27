<?php
	function kiemtraPalinDrome($text){
		$text1 = strlen($text)-1;
		$input = "";

		for ($i = $text1; $i >=0 ; $i--) { 
			$input = $input.$text[$i];
		}
		if($input == $text){
			echo "Day la chuoi palindrome";
		}else{
			echo "Khong phai chuoi palindrome";
		}

	}
	$chuoidauvao = "abccba";
	kiemtraPalinDrome($chuoidauvao);
?>