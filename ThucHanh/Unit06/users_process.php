<?php
	 $data = $_POST;
	 require_once('connection.php');
// Viết câu lệnh để thêm dữ liệu
	 $query = "INSERT INTO users (name,email,password,avatar) VALUES ('".$data['name']."','".$data['email']."',md5('".$data['password']."'),'".$data['avatar']."')";
   

// Thực thi câu lệnh
    $result = $conn->query($query);
    if ($result == true) {
    	setcookie('msg','Thêm mới thành công',time()+5);
    	header('location:users_add.php');
    }else{
    	setcookie('msg','Thêm mới không thành công',time()+5);
    	header('location:users_add.php');  
    }
?>