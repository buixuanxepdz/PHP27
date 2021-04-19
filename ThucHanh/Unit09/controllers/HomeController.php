<?php
	require_once('models/Post.php');
 	class HomeController
 	{
 	    var $post_model;
 	    public function __construct(){
 	    	$this->post_model = new Post();
 	    }
 	    public function index(){
 	    	$threePost = $this->post_model->get3Post();
 	    	$twoPost = $this->post_model->get2Post();
 	    	$get6Post = $this->post_model->get6Post();
 	    	$random = $this->post_model->random();
 	    	$viewcount = $this->post_model->viewcount();
 	    	require_once('views/home/index.php');
 	    }
 	}
 	
?>