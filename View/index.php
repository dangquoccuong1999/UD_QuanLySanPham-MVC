<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ứng Dụng Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .example {
            margin: 20px;
        }
    </style>
</head>
<body>
<div class="example">
    <div class="container">
        <div class="row">
            <h2>Sản Phẩm</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Thông Tin</th>
                    <th>Giá Sản Phẩm</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($product as $key) { ?>
                    <tr>
                        <td><?php echo $key->getId() ?></td>
                        <td><?php echo $key->getName() ?></td>
                        <td><?php echo $key->getNote() ?></td>
                        <td><?php echo $key->getPrice() ?></td>
                        <td><a href="index.php?action=update&id=<?php echo $key->getId() ?>">
                                <button>Update User</button>
                            </a>
                        </td>
                        <td><a href="index.php?action=delete&id=<?php echo $key->getId() ?>">
                                <button>Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                <tr>
                    <td>
                        <a href="index.php?action=add">
                            <button type="button" class="btn btn-success">Add Product</button>
                        </a>
                    </td>
                    <td>
                        <form action="" method="GET">
                            <input type="hidden" name="action" value="seach">
                            <input placeholder="Nhập tên sản phẩm mà bạn muốn tìm" style="width: 300px" name="nameProduct">
                            <button type="submit">Seach Product</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>
<!--                        <a href="indexLogin.php"><button>Đăng Xuất</button></a>-->
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
</body>
</html>