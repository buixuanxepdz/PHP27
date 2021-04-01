<?php
	 $data = $_POST;

	 require_once('connection.php');
// Viết câu lệnh để thêm dữ liệu
    $query = "UPDATE categories SET name='".$data['name']."',description='".$data['description']."',parent_id = NULL,thumbnail='".$data['thumbnail']."' WHERE  id = ".$data['id'];
   

// Thực thi câu lệnh
    $result = $conn->query($query);
    if ($result == true) {
    	setcookie('msg','Cập nhật thành công',time()+5);
    	header('location:categories.php');
    }else{
    	setcookie('msg','Cập nhật không thành công',time()+5);
    	header('location:categories.php');  
    }
?>