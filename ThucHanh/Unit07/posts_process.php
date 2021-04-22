<?php
	require_once('connection.php');
	$data = $_POST;
    $pname = rand(1000,10000)."-".$_FILES['thumbnail']['name'];
    $tname = $_FILES["thumbnail"]["tmp_name"];
   
    
    $uploads_dir = 'uploads/';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
	$query = "INSERT INTO posts(title,description,thumbnail,slug,content,view_count,user_id,category_id,created_at) VALUES ('".$data['title']."','".$data['description']."','".$pname."','".$data['slug']."','".$data['content']."','".$data['viewcount']."','".$data['username']."','".$data['category']."',DEFAULT(created_at))";
	
    $result = $conn->query($query);

	 if ($result == true) {
    	setcookie('msg','Thêm mới thành công',time()+5);
    	header('location:posts_add.php');
    }else{
    	setcookie('msg','Thêm mới không thành công',time()+5);
    	header('location:posts_add.php');  
    }
?>