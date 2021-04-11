<?php
	require_once('Connection.php');

	class Post{
		var $connection;
		function __construct(){
			$connection_obj = new Connection();

			$this->connection = $connection_obj->conn;
		}

		function all(){
			$sql = "SELECT posts.id,posts.title,posts.description,posts.thumbnail,posts.content,posts.slug,posts.view_count,users.name1,categories.name FROM posts INNER JOIN users on posts.user_id = users.id INNER JOIN categories on posts.category_id = categories.id";

			$result = $this->connection->query($sql);

			$posts = array();

			while($row = $result->fetch_assoc()){
				$posts[] = $row;
			}

			return $posts;
		}
		function find($id){
			$sql = "SELECT posts.id,posts.title,posts.thumbnail,posts.content,posts.description,posts.view_count,posts.slug,posts.created_at,users.name1,categories.name FROM posts INNER JOIN users on posts.user_id = users.id INNER JOIN categories on posts.category_id = categories.id WHERE posts.id = ".$id;

			return $this->connection->query($sql)->fetch_assoc();
		}
	}

	/*$user = new User();

	$users = $user->all();
	echo "<pre>";
		print_r($users);
	echo "</pre>";*/
?>