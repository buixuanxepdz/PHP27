<?php
	 $data = $_POST;
	 require_once('connection.php');
// Viết câu lệnh để thêm dữ liệu
	 if ($data['category']==0) {
	 	 $query = "INSERT INTO categories (name, description,slug,thumbnail) VALUES ('".$data['name']."','".$data['description']."','".$data['slug']."','".$data['thumbnail']."')";
	 }else{
	 	 $query = "INSERT INTO categories (name, description,parent_id,slug,thumbnail) VALUES ('".$data['name']."','".$data['description']."','".$data['category']."','".$data['slug']."','".$data['thumbnail']."')";
	 }
   

// Thực thi câu lệnh
    $result = $conn->query($query);
    if ($result == true) {
    	setcookie('msg','Thêm mới thành công',time()+5);
    	header('location:categories_add.php');
    }else{
    	setcookie('msg','Thêm mới không thành công',time()+5);
    	header('location:categories_add.php');  
    }
?>