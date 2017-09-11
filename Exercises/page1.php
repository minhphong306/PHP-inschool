


<!DOCTYPE html>
<html>
    <head>
        <title>Trang 1 - trang nhập liệu</title>
        <!-- CDN -->
        <!-- Google jQuery CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Font awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <h2 class="text-center text-danger"><a href="#">Đăng kí môn học</a></h2>
            <hr />
            <form action="page2.php" method="GET" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ho_ten">Họ tên:</label>
                    <div class="col-sm-10">
                        <input id="ho_ten"  name="ho_ten"  type="text" class="form-control"placeholder="Nhập vào họ tên">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="dia_chi">Địa chỉ:</label>
                    <div class="col-sm-10">
                        <input  id="dia_chi"  name="dia_chi" type="text" class="form-control"placeholder="Nhập vào địa chỉ">
                    </div>
                    <label class="control-label col-sm-2" for="dia_chi">Giới tính:</label>
                    <div class="col-sm-2 radio">
                        <label>
                            <input type="radio" name="gioi_tinh" id="optionsRadios1" value="Nam" checked>
                            Nam
                        </label>
                    </div>
                    <div class="col-sm-2 radio">
                        <label>
                            <input type="radio" name="gioi_tinh" id="optionsRadios1" value="Nữ" checked>
                            Nữ
                        </label>
                    </div>
                </div>

                <div class="form-group"> 
                    <label class="control-label col-sm-2" for="khoa">Khoa:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="khoa" name="khoa">
                            <option  value="CNTT">CNTT</option>
                            <option  value="Cầu đường">Cầu đường</option>
                            <option  value="Tiếng anh">Tiếng Anh</option>
                            <option  value="Kinh tế">Kinh tế</option>
                            <option  value="Vận tải">Vận tải</option>
                        </select>
                    </div>
                </div>

                <div class="form-group"> 
                    <label class="control-label col-sm-2" for="ho_ten">Môn</label>
                    <div class="col-sm-10">
                        <div class="checkbox">
                            <label><input name="mon[]"  value="Bóng đá" type="checkbox"> Bóng đá</label>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input  name="mon[]"  value="Bóng rổ" type="checkbox"> Bóng rổ</label>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input  name="mon[]"  value="Bóng bàn" type="checkbox"> Bóng bàn</label>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input  name="mon[]"  value="Cầu lông"  type="checkbox"> Cầu lông</label>
                        </div>
                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Đăng kí</button>
                    </div>
                </div>
            </form>

        </div>

    </body>
</html>