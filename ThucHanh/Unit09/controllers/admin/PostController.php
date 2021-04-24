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
			$random = $this->model->random();
			$post = $this->model->find($id);
			require_once('views/post/detail.php');
		}
		public function detailuser(){

			$id = $_GET['id'];
			$random = $this->model->random();
			$post = $this->model->find($id);
			require_once('views/post/detailuser.php');
		}

		public function getCategory(){
			$id = $_GET['id'];
			$random = $this->model->random();
			$post =  $this->model->getCategory($id);
			require_once('views/post/detailOnecategory.php');
		}
		/*public function getTravelCategory(){
			
			$random = $this->model->random();
			$post =  $this->model->getTravelCategory();
			require_once('views/post/detailTravelcategory.php');
		}
		public function getSportCategory(){
			
			$random = $this->model->random();
			$post =  $this->model->getSportCategory();
			require_once('views/post/detailSportcategory.php');
		}
		public function getMusicCategory(){
			
			$random = $this->model->random();
			$post =  $this->model->getMusicCategory();
			require_once('views/post/detailMusiccategory.php');
		}*/
		public function getallCategory(){

			/*$id = $_GET['id'];*/
			$random = $this->model->random();
			/*$post = $this->model->all();*/
			$category = $this->model->getallCategory();
			require_once('views/post/detailcategory.php');
		}
		public function add(){
			$cate_model = new Category();
			$categories = $cate_model->all();
			require_once('views/post/add.php');
		}
		public function home(){
			require_once('views/admin/home.php');
		}
		public function store(){
			$data = $_POST;
			/*$pname = rand(1000,10000)."-".$_FILES['thumbnail']['name'];
			$tname = $_FILES["thumbnail"]["tmp_name"];


			$uploads_dir = 'uploads';
			move_uploaded_file($tname, $uploads_dir.'/'.$pname);*/
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công',time()+10);
			}else{
				setcookie('error','Thêm mới thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=post&act=list");

		}
		public function delete(){
			$id = $_GET['id'];
			$success = $this->model->destroy($id);
			if ($success) {
				setcookie('success','Xóa thành công',time()+10);
			}else{
				setcookie('error','Xóa thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=post&act=list");
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
			header("location:index.php?admin=admin&mod=post&act=list");
		}

		

	}
?>