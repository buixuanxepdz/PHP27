<?php
	 $data = $_POST;

	 require_once('connection.php');
// Viết câu lệnh để thêm dữ liệu
    $query = "UPDATE users SET name='".$data['name']."' ,email='".$data['email']."',avatar='".$data['avatar']."' WHERE  id = ".$data['id'];
   

// Thực thi câu lệnh
    $result = $conn->query($query);
    if ($result == true) {
    	setcookie('msg','Cập nhật thành công',time()+5);
    	header('location:users.php');
    }else{
    	setcookie('msg','Cập nhật không thành công',time()+5);
    	header('location:users.php');  
    }
?>