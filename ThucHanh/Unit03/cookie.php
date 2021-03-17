<?php
	echo "<br>".$_COOKIE['class'];

	setcookie('class','PHP27',time() + 5);

	echo "<br>".$_COOKIE['class'];
?>