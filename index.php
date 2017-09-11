<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Trang chủ</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php
        include './partial/nav.php';
        ?>

        <div class="container">
            <h3>Đây là trang bài tập trên lớp - minhphong306</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Bài học</th>
                        <th>Mô tả</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bài 1</td>
                        <td>
                            <b>
                                Thực hành $_GET và $_POST
                            </b>
                        </td>
                        <td style="width: 40%">
                            Tạo 1 form đăng kí, thực hiện lấy dữ liệu thông qua $_POST hoặc $_GET với input đa dạng: text, radio, checkbox, select
                        </td>
                        <td>
                            <button class="btn btn-default">
                                <a href="Exercises/page1.php">
                                    <i class="fa fa-desktop"></i>
                                    Xem demo
                                </a>
                            </button>
                            <button class="btn btn-info">
                                <i class="fa fa-code"></i>
                                Xem code
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>