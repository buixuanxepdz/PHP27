<?php
    require_once('connection.php');
	 $id = $_GET['id'];
	 $data = null;
// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT posts.id,posts.title,posts.thumbnail,posts.content,posts.description,posts.view_count,posts.slug,posts.created_at,users.name1,categories.name FROM posts INNER JOIN users on posts.user_id = users.id INNER JOIN categories on posts.category_id = categories.id WHERE posts.id = ".$id;

// Thực thi câu lệnh
    /*$result = $conn->query($query);
    $post = $result->fetch_assoc();*/
    $data = $conn->query($query);
    $data = $data->fetch_assoc();
    echo json_encode($data);
?>
