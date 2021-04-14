<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update New User</h3>
    <hr><a href="index.php?mod=user&act=list" class="btn btn-success">quay lại</a>
        <form action="index.php?mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name1" placeholder="" name="name1" value="<?= $user['name1'] ?>">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?= $user['email'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>