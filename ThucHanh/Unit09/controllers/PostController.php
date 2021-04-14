<?php
	require_once('models/Post.php');
	require_once('models/Category.php');
	class PostController{
		var $model;
		public function __construct(){
			$this->model = new Post();
		}

		public function list(){

			$posts = $this->model->all();

			require_once('views/post/list.php');
		}
		public function detail(){

			$id = $_GET['id'];

			$post = $this->model->find($id);
			require_once('views/post/detail.php');

		}
		public function add(){
			$cate_model = new Category();
			$categories = $cate_model->all();
			require_once('views/post/add.php');
		}

		public function store(){
			$data = $_POST;
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công',time()+10);
			}else{
				setcookie('error','Thêm mới thất bại',time()+10);
			}
			header("location:index.php?mod=post&act=list");
		}
		public function delete(){
			$id = $_GET['id'];
			$success = $this->model->destroy($id);
			if ($success) {
				setcookie('success','Xóa thành công',time()+10);
			}else{
				setcookie('error','Xóa thất bại',time()+10);
			}
			header("location:index.php?mod=post&act=list");
		}
		public function edit(){
			$id = $_GET['id'];
			$post = $this->model->find($id);
			require_once('views/post/edit.php');
		}

		function update(){
			$data = $_POST;
			$status = $this->model->update($data);
			if ($status) {
				setcookie('success','Cập nhật thành công',time()+10);
			}else{
				setcookie('error','Cập nhật thất bại',time()+10);
			}
			header("location:index.php?mod=post&act=list");
		}

		

	}
?>