<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Khách Hàng</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example{
            margin: 50px;
        }

    </style>
</head>
<body>
<div class="example">
    <div class="container">
        <div class="row">
            <h2>Thêm Sản Phẩm</h2>
            <form class="form-inline" action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Chi tiết" name="note">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Giá sản phẩm" name="price">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
