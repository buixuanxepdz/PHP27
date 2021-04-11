<?php
	require_once('models/Category.php');
	class CategoryController{
		var $model;
		function __construct(){
			$this->model = new Category();
		}

		function list(){

			$categories = $this->model->all();

			require_once('views/category/list.php');
		}
		function detail(){

			$id = $_GET['id'];

			$category = $this->model->find($id);
			require_once('views/category/detail.php');

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