<?php
	require_once('models/Category.php');
	require_once('controllers/admin/BaseAdminController.php');
	class CategoryController extends BaseController{
		var $model;
		public function __construct(){
			$this->model = new Category();
		}

		public function list(){

			$categories = $this->model->all();

			$this->view('views/category/list',[
				'categories' => $categories
			]);
		}
		public function detail(){

			$id = $_GET['id'];

			$category = $this->model->find($id);
			require_once('views/category/detail.php');

		}
		public function add(){
			/*$parents = $this->model->parents();*/
			require_once('views/category/add.php');
		}

		public function store(){
			$data = $_POST;
			$success = $this->model->create($data);
			if ($success) {
				setcookie('success','Thêm mới thành công',time()+10);
			}else{
				setcookie('error','Thêm mới thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=category&act=list");
		}
		public function delete(){
			$id = $_GET['id'];
			$success = $this->model->destroy($id);
			if ($success) {
				setcookie('success','Xóa thành công',time()+10);
			}else{
				setcookie('error','Xóa thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=category&act=list");
		}
		public function edit(){
			$id = $_GET['id'];
			$category = $this->model->find($id);
			require_once('views/category/edit.php');
		}

		function update(){
			$data = $_POST;

			$status = $this->model->update($data);
			if ($status) {
				setcookie('success','Cập nhật thành công',time()+10);
			}else{
				setcookie('error','Cập nhật thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=category&act=list");
		}
		

	}
?>