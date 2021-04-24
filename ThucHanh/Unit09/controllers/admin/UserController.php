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
		public function add(){
			require_once('views/user/add.php');
		}

		public function store(){
			$data = $_POST;
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công',time()+10);
			}else{
				setcookie('error','Thêm mới thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=user&act=list");
		}
		public function delete(){
			$id = $_GET['id'];
			$success = $this->model->destroy($id);
			if ($success) {
				setcookie('success','Xóa thành công',time()+10);
			}else{
				setcookie('error','Xóa thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=user&act=list");
		}
		public function edit(){
			$id = $_GET['id'];
			$user = $this->model->find($id);
			require_once('views/user/edit.php');
		}

		public function update(){
			$data = $_POST;
			$status = $this->model->update($data);
			if ($status) {
				setcookie('success','Cập nhật thành công',time()+10);
			}else{
				setcookie('error','Cập nhật thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=user&act=list");
		}

		public function search(){
			$keyWord = $_POST['keyWord'];
			$users = $this->model->search($keyWord);

			require_once('views/user/list.php');
		}

	}
?>