<?php
	require_once('models/Post.php');
	class PostController{
		var $model;
		function __construct(){
			$this->model = new Post();
		}

		function list(){

			$posts = $this->model->all();

			require_once('views/post/list.php');
		}
		function detail(){

			$id = $_GET['id'];

			$post = $this->model->find($id);
			require_once('views/post/detail.php');

		}
		function add(){
			echo "<br> Form them moi category";
		}

		function add_process(){
			echo "<br>  Process them moi category";
		}

		function edit(){
			echo "<br> Sua category";
		}

	}
?>