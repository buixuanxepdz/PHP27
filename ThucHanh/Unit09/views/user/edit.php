<?php require_once('views/admin/header.php'); ?>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update New User</h3>
    <hr><a href="index.php?admin=admin&mod=user&act=list" class="btn btn-success">quay lại</a>
        <form action="index.php?admin=admin&mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name1" placeholder="" name="name1" value="<?= $user['name1'] ?>">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
            </div>
             <div class="form-group">
                <label for="email">Avatar</label>
                <input type="text" class="form-control" id="avatar" placeholder="" name="avatar" value="<?= $user['avatar'];?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?= $user['email'];?>">
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" class="form-control" id="password" placeholder="" name="password" value="<?= $user['password'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>