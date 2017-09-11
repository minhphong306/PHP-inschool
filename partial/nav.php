<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Bài tập trên lớp</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="#">Chưa có cái gì để ghi cả</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function () {
        $("li a[href='" + window.location.pathname.split('/')[2] + "']").parent().addClass('active');
    });
</script>