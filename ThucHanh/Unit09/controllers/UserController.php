<?php
	require_once('models/User.php');
	class UserController{
		var $model;
		function __construct(){
			$this->model = new User();
		}

		function list(){

			$users = $this->model->all();

			require_once('views/user/list.php');
		}
		function detail(){

			$id = $_GET['id'];

			$user = $this->model->find($id);
			require_once('views/user/detail.php');

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