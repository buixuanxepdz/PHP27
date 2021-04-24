<?php
	require_once('models/Post.php');
	require_once('models/Category.php');
 	class HomeController
 	{
 	    var $post_model;
 	    public function __construct(){
 	    	$this->post_model = new Post();
 	    	$this->category_model = new Category();
 	    }
 	    public function index(){
 	    	$threePost = $this->post_model->get3Post();
 	    	$twoPost = $this->post_model->get2Post();
 	    	$get6Post = $this->post_model->get6Post();
 	    	$random = $this->post_model->random();
 	    	$getCategory = $this->category_model->getCategory();
 	    	$getCategory = $this->category_model->getCategory();
 	    	$viewcount = $this->post_model->viewcount();
 	    	$getallCategory = $this->post_model->getallCategory();
 	    	require_once('views/home/index.php');
 	    }
 	}
 	
?>