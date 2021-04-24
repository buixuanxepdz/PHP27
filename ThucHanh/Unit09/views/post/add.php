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
                    "title": {
                        required: true
                    },
                    "thumbnail":{
                        required:true
                    },
                    "description": {
                        required: true
                    },
                    "content":{
                        required:true
                    },
                },
                messages: {
                    "title": {
                        required: "Please enter title",
                    },
                    "thumbnail": {
                        required: "Please enter thumbnail",
                    },
                    "description": {
                        required: "Please enter description",
                    },
                    "content": {
                        required: "Please enter content",
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
    <h3 align="center">Add New Posts</h3>
    <hr>
        <form id="Form"  action="index.php?admin=admin&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="title" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control" id="category_id">
                    <?php foreach ($categories as $cate) {
                        # code... ?>
                    <option value="<?= $cate['id']; ?>"><?= $cate['category_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="description" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Contents</label>
                <textarea id="content" name="content" class="form-control" rows="4" cols="50">
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>