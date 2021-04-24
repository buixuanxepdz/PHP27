
<?php require_once('views/admin/header.php'); ?>
	
 	<div class="container">
 		<h3 class="text-center">--- POSTS ---</h3>
 		<a href="index.php?admin=admin&mod=post&act=add" class="btn btn-primary">Add New POST</a>
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
 				<th style="display: inline-block;width: 40%;">Description</th>
 				<th style="display: inline-block;width: 40%;">Content</th>
 				<th>View_count</th>
 				<th>Action</th>
 			</thead>
 			<?php
 				foreach ($posts as $post) {

 					?>
 			<tr>
 				
 					<td><?= $post['id']; ?></td>
 					<td><?= $post['title']; ?></td>
 					<td>
 						<img src="public/images/<?= $post['thumbnail'] ?>" width="100px" height="100px">
 					</td>
 					<td style="width: 40%;display: inline-block;height: 180px;overflow-y: scroll;"><?= $post['description']; ?></td>
 					<td style="width: 50%;display: inline-block;height: 180px;overflow-y: scroll;"><?= $post['content']; ?></td>
 					<td><?= $post['view_count']; ?></td>
 					<td>
 						<a href="index.php?admin=admin&mod=post&act=detail&id=<?= $post['id'] ?>" class="btn btn-primary viewmodal">Detail</a>
 						<a href="index.php?admin=admin&mod=post&act=edit&id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
 						<a href="index.php?admin=admin&mod=post&act=delete&id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
 					</td>
 				</tr>
 			<?php }  ?>
 		</table>
 	</div>
 	
 </body>
 </html>
 <?php require('views/admin/footer.php') ?>