<?php
	require_once("connection.php");

	$obj = Connection();
	$query = "SELECT posts.id,posts.title,posts.description,posts.thumbnail,posts.content,posts.slug,posts.view_count,users.name1,categories.name FROM posts INNER JOIN users on posts.user_id = users.id INNER JOIN categories on posts.category_id = categories.id";
	$status = $obj->conn->query($query);
?>