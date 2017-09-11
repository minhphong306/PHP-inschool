


<!DOCTYPE html>
<html>
    <head>
        <title>Trang 2 - trang lấy dữ liệu</title>
        <!-- CDN -->
        <!-- Google jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <!-- Font awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>

        <div class="container">
            <h3 class="text-center">Dữ liệu nhận được</h3>
            <table class="table table-striped" style="width: 50%;  margin: auto;">
                <thead>
                    <tr>
                        <th>Tên trường</th>
                        <th>Giá trị</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $mapping = [
                        "ho_ten" => "Họ tên",
                        "dia_chi" => "Địa chỉ",
                        "gioi_tinh" => "Giới tính",
                        "khoa" => "Khoa",
                        "mon" => "Môn"
                    ];
                    
                    $class = ["label-primary", "label-danger", "label-warning", "label-info", "label-default"];

                    foreach ($_GET as $key => $value) {
                        $rand_index = array_rand($class);
                        echo "<tr>
                                <td><b>{$mapping["{$key}"]}</b></td>";
                        if (gettype($value) == 'array') {
                            echo "<td>";
                            foreach ($value as $item) {
                                echo "<p><label class='label {$class[$rand_index]}'> $item</label></p>";
                            }
                            echo "</td>";
                        } else {
                            echo "<td><label class='label {$class[$rand_index]}'>{$value}</label></td>";
                        }
                        echo "</tr>";
                    }
                    ?>


                </tbody>
            </table>
        </div>

    </body>
</html>