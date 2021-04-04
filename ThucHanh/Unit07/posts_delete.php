<?php
	require_once("connection.php");
	$id = $_GET['id'];

	$query = "DELETE FROM posts WHERE posts.id =  " .$id;

	$result = $conn->query($query);

	if($result == true){
		setcookie('msg','Xóa thành công',time()+5);
		header('Location: posts.php');
	}else{
		setcookie('msg','Xóa KHÔNG thành công',time()+5);
		header('Location: posts.php');
	}
?>