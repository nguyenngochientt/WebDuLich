<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/bootstrap/dist/css/bootstrap.css"></script>
    <link rel="stylesheet" type="text/css" href="scss/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!--  -->
    <?php 
        include 'model\connectDB.php';
        use model\connectDB;
        $connectDB=new connectDB("tctdlich");
        $connectDB->connect();
    ?>
</head>
<body>
    <!-- top bar -->
    <?php include_once __DIR__."/commont_layout/topbar.html" ?>
    <!--end topbar -->
    <!-- menu -->
    <?php include_once __DIR__."/commont_layout/menu.php" ?>
    <!-- end menu -->
    <!-- slider -->
    <?php include_once __DIR__."/commont_layout/slider.html" ?>
    <!-- end slider -->
    <!--  grid_4-->
    <?php include_once __DIR__."/commont_layout/timtour_g4.html" ?>
    <!--end grid_4-->
    <!-- Chọn tỉnh thành -->
    <?php include_once __DIR__."/commont_layout/choose_city.html" ?>
    <!-- end chọn tỉnh thành -->
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
        <div class="right_col" role="main">
            <!-- title row -->
            <div class="row">
                <div class="  invoice-header">
                    <h1 style="color: #ef2929;">
                        <i class="fa fa-globe"></i> Thông tin doanh nghiệp
                    </h1>
                    <h4 style="color: #9292f5;">Công ty du lịch Tịnh Hải-TravelBook</h4>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    Địa chỉ
                    <address>
                        <strong>Số 75/Tầng 7/Toàn CCN/Trần Hưng Đạo/Nha Trang</strong>
                        <br>Phone: 1 (804) 123-9876
                        <br>Email: @tinhhaimail.com
                    </address>
                    <h3 style="color: #9292f5;">Chuyên về du lịch </h3>
                    <strong>Cho đặt tour du lịch</strong><br>
                    <strong>Tổ chức các chuyên đi dã ngoại trong và ngoài nước</strong>
                    <strong>Đặt phòng khách sạn</strong><br>
                    <strong>Cho thuê xe du lịch</strong><br>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col" style="margin-left:30px">
                    <address>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.060415810739!2d109.18870161407393!3d12.244188591336005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170677fa9f55d39%3A0xed49f16b328e60e4!2zVHLhuqduIEjGsG5nIMSQ4bqhbywgTmhhIFRyYW5n!5e0!3m2!1svi!2s!4v1574652935384!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </address>
                </div>
                <!-- /.col -->  
               
                <!-- /.col -->
            </div>
        </div>
    </div>
        </div>
    </div>
  

</div>
 <?php include_once __DIR__ ."/commont_layout/footer.html"?>
</body>

</html>