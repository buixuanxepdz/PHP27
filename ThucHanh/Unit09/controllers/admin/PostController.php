<?php
	require_once('models/Post.php');
	require_once('models/Category.php');
	class PostController{
		var $model;
		public function __construct(){
			$this->model = new Post();
			$this->category_model = new Category();
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
			$getCategory = $this->category_model->getCategory();//category
			require_once('views/post/detailuser.php');
		}

		public function getCategory(){
			$id = $_GET['id'];
			$random = $this->model->random();
			$post =  $this->model->getCategory($id);
			$getCategory = $this->category_model->getCategory($id);//category
			require_once('views/post/detailOnecategory.php');
		}
		public function getallCategory(){

			$random = $this->model->random();
			$category = $this->model->getallCategory();
			$getCategory = $this->category_model->getCategory();//category
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
			$target_dir = "public/images/";  // thư mục chứa file upload

	        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
	        
	        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
	        	$img = array('thumbnail' => $_FILES["thumbnail"]["name"]);
	        	$data = array_merge($data, $img);
	        } else { // Upload file có lỗi 
	        	echo "Sorry, there was an error uploading your file.";
	        }
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
			 // kiểm tra xem button Submit đã được click hay chưa ? 

	        $target_dir = "public/images/";  // thư mục chứa file upload

	        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
	        
	        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
	        	$img = array('thumbnail' => $_FILES["thumbnail"]["name"]);
	        	$data = array_merge($data, $img);
	        } else { // Upload file có lỗi 
	        	echo "Sorry, there was an error uploading your file.";
	        }
	    	
	    	// echo "<pre>";
	    	// print_r($data);
	    	// echo "</pre>";
	    	// die();
	    	$status = $this->model->update($data);
			if ($status) {
				setcookie('success','Cập nhật thành công',time()+10);
			}else{
				setcookie('error','Cập nhật thất bại',time()+10);
			}
			header("location:index.php?admin=admin&mod=post&act=list");
		}
		public function search(){
			$keyWord = $_POST['keyWord'];
			$categories = $this->model->search($keyWord);

			require_once('views/home/index.php');
		}

		

	}
?>