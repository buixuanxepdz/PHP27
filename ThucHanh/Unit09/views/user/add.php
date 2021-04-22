<?php require_once('views/admin/header.php'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script type="text/javascript">
        $(document).ready(function(){

            $("#demoForm").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "name1": {
                        required: true
                    },
                    "thumbnail":{
                        required:true
                    },
                    "email": {
                        required: true
                    },
                    "password":{
                        required:true
                    },
                },
                messages: {
                    "name1": {
                        required: "Please enter name",
                    },
                    "thumbnail": {
                        required: "Please enter thumbnail",
                    },
                    "email": {
                        required: "Please enter email",
                    },
                    "password": {
                        required: "Please enter password",
                    }
                }
            });
        })
    </script>
    <style type="text/css">
        .error{
            width: 100%;
            font-size: 16px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New User</h3>
    <hr>
        <a href="index.php?admin=admin&mod=user&act=list" class="btn btn-success">quay lại</a>
        <form id="demoForm" action="index.php?admin=admin&mod=user&act=store" method="POST" role="form" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name1" placeholder="" name="name1">
            </div>
            <div class="form-group">
                <label for="name">Avatar</label>
                <input type="text" class="form-control" id="avatar" placeholder="" name="avatar">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input  type="password" class="form-control" id="password" placeholder="" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>