<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>POST</title>
 	<!-- Latest compiled and minified CSS -->
 	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

 	<!-- Optional theme -->
 	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

 	<!-- Latest compiled and minified JavaScript -->
 	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<h3 class="text-center">--- POSTS ---</h3>
 		<a href="index.php?mod=post&act=add" class="btn btn-primary">Add New Category</a>
 		<?php
        if(isset($_COOKIE['success'])){
            ?>
            <div class="alert alert-success"><?= $_COOKIE['success']; ?></div>
        <?php } ?> 
        <?php
        if(isset($_COOKIE['error'])){
            ?>
            <div class="alert alert-error"><?= $_COOKIE['error']; ?></div>
        <?php } ?>
 		<table class="table">
 			<thead>
 				<th>ID</th>
 				<th>Title</th>
 				<th>Thumbnail</th>
 				<th>Description</th>
 				<th>Content</th>
 				<th>View_count</th>
 				<th>User name</th>
 				<th>Category name</th>
 			</thead>
 			<?php
 				foreach ($posts as $post) {
            			# code...

 					?>
 			<tr>
 				
 					<td><?= $post['id']; ?></td>
 					<td><?= $post['title']; ?></td>
 					<td>
 						<img src="uploads/<?= $post['thumbnail'] ?>" width="100px" height="100px">
 					</td>
 					<td><?= $post['description']; ?></td>
 					<td><?= $post['content']; ?></td>
 					<td><?= $post['view_count']; ?></td>
 					<td><?= $post['name1']; ?></td>
 					<td><?= $post['name']; ?></td>
 					<td>
 						<a href="index.php?mod=post&act=detail&id=<?= $post['id'] ?>" class="btn btn-primary viewmodal">Detail</a>
 						<a href="index.php?mod=post&act=edit&id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
 						<a href="index.php?mod=post&act=delete&id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
 					</td>
 				</tr>
 			<?php }  ?>
 		</table>
 	</div>
 	
 </body>
 </html>