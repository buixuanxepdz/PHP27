<?php
	require_once('connection.php');
	
	$query = "SELECT posts.id,posts.title,posts.description,posts.thumbnail,posts.content,posts.slug,posts.view_count,users.name1,categories.name FROM posts INNER JOIN users on posts.user_id = users.id INNER JOIN categories on posts.category_id = categories.id";

	$result = $conn->query($query);

	$post = array();

	while ($row = $result->fetch_assoc()) {
		$post[] = $result;
	}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function(){

            $("#demoForm").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "title": {
                        required: true
                    },
                    "description": {
                        required: true
                    },
                    "content":{
                        required:true
                    },
                },
                messages: {
                    "title": {
                        required: "Please enter title",
                    },
                    "description": {
                        required: "Please enter description",
                    },
                    "content": {
                        required: "Please enter content",
                    }
                }
            });
        })
    </script>
    <style type="text/css">
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New User</h3>
    <hr>
        <a href="posts.php" class="btn btn-success">quay lại</a>
        <form id="demoForm" action="posts_process.php" method="POST" role="form" enctype="multipart/form-data">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" placeholder="" name="content">
            </div>
            <div class="form-group">
                <label for="viewcount">View Count</label>
                <input type="text" class="form-control" id="viewcount" placeholder="" name="viewcount">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="username">User name</label>
                <input type="text" class="form-control" id="username" placeholder="" name="username">
            </div> 
            <div class="form-group">
                <label for="category">Category name</label>
                <input type="text" class="form-control" id="category" placeholder="" name="category">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>