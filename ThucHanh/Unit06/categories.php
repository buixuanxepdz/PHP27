<?php
	require_once('connection.php');
// Câu lệnh truy vấn
$query = "SELECT * FROM categories";

// Thực thi câu lệnh
$result = $conn->query($query);

// Tạo 1 mảng để chứa dữ liệu
$categories = array();

while($row = $result->fetch_assoc()) { 
	$categories[] = $row;
}

/*foreach ($categories as $item){
     echo "<pre>";
          print_r($item);
     echo "</pre>";
 }*/

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
 		<h3 class="text-center">--- CATEGORIES ---</h3>
 		<a href="categories_add.php" class="btn btn-primary">Add New Category</a>
 		<?php
 		if(isset($_COOKIE['msg'])){
 			?>
 			<div class="alert alert-success"><?= $_COOKIE['msg']; ?></div>
 		<?php } ?>
 		<table class="table">
 			<thead>
 				<th>ID</th>
 				<th>Name</th>
 				<th>Thumbnail</th>
 				<th>Description</th>
 				<th>Action</th>
 			</thead>
 			<?php
 				foreach ($categories as $cate) {
            			# code...

 					?>
 			<tr>
 				
 					<td><?= $cate['id']; ?></td>
 					<td><?= $cate['name']; ?></td>
 					<td>
 						<img src="<?= $cate['thumbnail'] ?>" width="100px" height="100px">
 					</td>
 					<td><?= $cate['description']; ?></td>
 					<td>
 						<a href="categories_detail.php?id=<?= $cate['id']; ?>" class="btn btn-primary">Detail</a>
 						<a href="categories_edit.php?id=<?= $cate['id']; ?>" class="btn btn-success">Edit</a>
 						<a href="categories_delete.php?id=<?= $cate['id']; ?>" class="btn btn-danger">Delete</a>
 					</td>
 				</tr>
 			<?php }  ?>
 		</table>
 	</div>
 </body>
 </html>