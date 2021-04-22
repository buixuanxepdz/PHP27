<?php require_once('views/admin/header.php'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script type="text/javascript">
        $(document).ready(function(){

            $("#Form").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "category_name": {
                        required: true
                    },
                    "category_thumbnail":{
                        required:true
                    },
                    "category_description": {
                        required: true
                    }
                },
                messages: {
                    "category_name": {
                        required: "Please enter name",
                    },
                    "category_thumbnail": {
                        required: "Please enter thumbnail",
                    },
                    "category_description": {
                        required: "Please enter description",
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
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Category</h3>
    <hr>
        <form id="Form" action="index.php?admin=admin&mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_name">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_thumbnail">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_description">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>