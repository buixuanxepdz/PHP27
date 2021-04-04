<?php 
	 require_once('connection.php');
         
     $data = $_POST;
     $pname = rand(1000,10000)."-".$_FILES['thumbnail']['name'];
     $tname = $_FILES["thumbnail"]["tmp_name"];
   
    
    $uploads_dir = 'uploads/';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
// Viết câu lệnh để thêm dữ liệu
    $query = "UPDATE  posts INNER JOIN categories ON posts.category_id = categories.id INNER JOIN users ON  posts.user_id = users.id SET name = '".$data['category']."',name1 = '".$data['username']."',title='".$data['title']."',posts.thumbnail='".$pname."',categories.thumbnail = '".$pname."',posts.slug = '".$data['slug']."',posts.description='".$data['description']."' WHERE posts.id = " .$data['id'];
// Thực thi câu lệnh
    $result = $conn->query($query);
    if ($result == true) {
    	setcookie('msg','Cập nhật thành công',time()+5);
    	header('location:posts.php');
    }else{
    	setcookie('msg','Cập nhật không thành công',time()+5);
    	header('location:posts.php');  
    }
?>