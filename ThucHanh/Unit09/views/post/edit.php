<?php require_once('views/admin/header.php'); ?>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update post</h3>
    <hr>
        <form action="?admin=admin&mod=post&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $post['title'] ?>">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $post['id'] ?>">
            </div>
             <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $post['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea type="text" class="form-control" id="" placeholder="" name="description"><?= $post['description'] ?></textarea>
            </div>
             <div class="form-group">
                <label for="">Content</label>
                <textarea  id="content" name="content" class="form-control" rows="4" cols="50">
                    <?= $post['content'] ?>
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>