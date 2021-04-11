<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <table class="table" width="1000px" align="center">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Content</th>
                <th>View count</th>
                <th>Username</th>
                <th>Categoryname</th>
                <th>Creat at</th>
            </thead>
            <tr>
                
                    <td><?= $post['id']; ?></td>
                    <td><?= $post['name']; ?></td>
                    <td>
                        <img src="<?= $post['thumbnail'] ?>" width="100px" height="100px">
                    </td>
                    <td><?= $post['description']; ?></td>
                    <td><?= $post['slug'] ?></td>
                    <td><?= $post['content'] ?></td>
                    <td><?= $post['view_count'] ?></td>
                    <td><?= $post['name1'] ?></td>
                    <td><?= $post['name'] ?></td>
                    <td><?= $post['created_at'] ?></td>
                </tr>
        </table>
        <a class="btn btn-primary" href="index.php?mod=post&act=list">Quay lai trang chu</a>
</body>
</html>