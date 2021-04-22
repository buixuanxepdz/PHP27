<?php require_once('views/admin/header.php'); ?>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update Category</h3>
    <hr>
        <form action="index.php?admin=admin&mod=category&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_name" value="<?= $category['category_name'] ?>">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $category['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_thumbnail" value="<?= $category['category_thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_description" value="<?= $category['category_description'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>