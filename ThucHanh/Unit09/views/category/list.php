<?php require_once('views/admin/header.php'); ?>

    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="index.php?admin=admin&mod=category&act=add" class="btn btn-primary">Add New Category</a>
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
                    <td><?= $cate['category_name']; ?></td>
                    <td>
                        <img src="<?= $cate['category_thumbnail'] ?>" width="100px" height="100px">
                    </td>
                    <td><?= $cate['category_description']; ?></td>
                    <td>
                        <a href="index.php?&admin=admin&mod=category&act=detail&id=<?= $cate['id']?>" class="btn btn-primary">Detail</a>
                        <a href="index.php?&admin=admin&mod=category&act=edit&id=<?= $cate['id']?>" class="btn btn-success">Edit</a>
                        <a href="index.php?admin=admin&mod=category&act=delete&id=<?= $cate['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php }  ?>
        </table>
    </div>
 </body>
 </html>
 <?php  ?>