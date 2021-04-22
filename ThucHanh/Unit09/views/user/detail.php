<?php require_once('views/admin/header.php'); ?>
    <style>
    </style>
<body>
    <table class="table" width="1000px" align="center">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Avatar</th>
                <th>Email</th>
                <th>Password</th>
                <th>Creat at</th>
            </thead>
            <tr>
                
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name1']; ?></td>
                    <td>
                        <img src="<?= $user['avatar'] ?>" width="100px" height="100px">
                    </td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['password']; ?></td>
                    <td><?= $user['user_created_at']; ?></td>
                </tr>
        </table>
        <a class="btn btn-primary" href="index.php?admin=admin&mod=user&act=list">Quay lai trang chu</a>
</body>
</html>