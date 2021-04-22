<?php require_once('views/admin/header.php'); ?>
<body>
    <table class="table" width="1000px" align="center">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Content</th>
                <th>Creat at</th>
            </thead>
            <tr>
                
                    <td><?= $post['id']; ?></td>
                    <td><?= $post['title']; ?></td>
                    <td>
                        <img src="<?= $post['thumbnail'] ?>" width="100px" height="100px">
                    </td>
                    <td><?= $post['description']; ?></td>
                    <td><?= $post['content'] ?></td>
                    <td><?= $post['created_at'] ?></td>
                </tr>
        </table>
        <a class="btn btn-primary" href="index.php?admin=admin&mod=category&act=list">Quay lai trang chu</a>
</body>
</html>