<?php 
	require_once('connection.php');
	$id = $_GET['id'];
	// Câu lệnh truy vấn
    $query = "DELETE FROM categories WHERE id = ".$id;

    // Thực thi câu lệnh
    $result = $conn->query($query); 
    if($result == true){
		setcookie('msg','Xóa thành công',time()+5);
		header('Location: categories.php');
	}else{
		setcookie('msg','Xóa KHÔNG thành công',time()+5);
		header('Location: categories.php');
	}
 ?>