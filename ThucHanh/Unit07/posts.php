<?php
	require_once('connection.php');
// Câu lệnh truy vấn
$query = "SELECT posts.id,posts.title,posts.description,posts.thumbnail,posts.content,posts.slug,posts.view_count,users.name1,categories.name FROM posts INNER JOIN users on posts.user_id = users.id INNER JOIN categories on posts.category_id = categories.id";

// Thực thi câu lệnh
$result = $conn->query($query);

// Tạo 1 mảng để chứa dữ liệu
$posts = array();

while($row = $result->fetch_assoc()) { 
	$posts[] = $row;
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>CATEGORIES</title>
 	<!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

 	<!-- Optional theme -->
 	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

 	<!-- Latest compiled and minified JavaScript -->
 	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<div class="container">
 		<h3 class="text-center">--- POSTS ---</h3>
 		<a href="posts_add.php" class="btn btn-primary">Add New Category</a>
 		<?php
 		if(isset($_COOKIE['msg'])){
 			?>
 			<div class="alert alert-success"><?= $_COOKIE['msg']; ?></div>
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
 						<a href="posts_detail.php?id=<?= $post['id']; ?>" class="btn btn-primary">Detail</a>
 						<a href="posts_edit.php?id=<?= $post['id']; ?>" class="btn btn-success">Edit</a>
 						<a href="posts_delete.php?id=<?= $post['id']; ?>" class="btn btn-danger">Delete</a>
 					</td>
 				</tr>
 			<?php }  ?>
 		</table>
 	</div>
 </body>
 </html>