<?php require_once('views/admin/header.php'); ?>
<body>
    <table class="table" width="1000px" align="center">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Creat at</th>
            </thead>
            <tr>
                
                    <td><?= $category['id']; ?></td>
                    <td><?= $category['category_name']; ?></td>
                    <td>
                        <img src="<?= $category['category_thumbnail'] ?>" width="100px" height="100px">
                    </td>
                    <td><?= $category['category_description']; ?></td>
                    <td><?= $category['category_slug'] ?></td>
                    <td><?= $category['category_created_at'] ?></td>
                </tr>
        </table>
        <a class="btn btn-primary" href="index.php?admin=admin&mod=category&act=list">Quay lai trang chu</a>
</body>
</html>