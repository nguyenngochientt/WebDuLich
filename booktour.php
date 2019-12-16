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
    <script src="Jquery/load_item_newTour.js"></script>
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
    <!--  -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 image column_booking">
                    <div class="title">
                        <p></p>
                    </div>
                    <div>
                    <?php 
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $select="SELECT tour.img_url from tour
                            WHERE  id_tour=".$id;
                            $result=mysqli_query( $connectDB->conn, $select);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    echo "<img src='admin/images/".$row['img_url']."' style='width: 541px;height: 462px;'>";
                                }
                            }
                        }
                    ?>    
                    </div>
                    <div class="#" style="margin-top:70px">
                        <div style="float:left" class="col-sm-6">

                        </div>
                        <div  style="float:left" class="col-sm-6">
                            
                        </div>  
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="title">
                        <p></p>
                    </div>
                    <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $select="SELECT tour.*,category.*,tour_guider.*,region.*
                        from 	tour, category, tour_guider,region
                        WHERE tour.id_category=category.id_category AND
                        tour.tour_guide_id=tour_guider.id_guider and region.id_region=tour.id_region
                        and id_tour=".$id;
                        $result=mysqli_query( $connectDB->conn, $select);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                                echo '
                                    <ul class="list-group column_booking">'.
                                    '<li class="list-group-item">Tên tour: <span>'.$row["name_tour"].'</span></li>'.
                                    '<li class="list-group-item">Thời gian khởi hành: <span>'.$row["date_go"].'</span></li>'.
                                    '<li class="list-group-item">Nơi khởi hành: <span>'.$row["place_start"].'</span></li>'.
                                    '<li class="list-group-item">Điểm dừng chân: <span>'.$row["place_des"].'</span></li>'.
                                    '<li class="list-group-item">Thời gian về: <span>'.$row["date_back"].'</span></li>'.
                                    '<li class="list-group-item">'.
                                        '<p>'."Số vé người lớn: <span>".$row["num_adults"].'</span></p>'.
                                        '<p>'."Giá vé người lớn: <span>".$row["price_adult"].'</span></p>'.
                                        '<p>'."Số vé trẻ em: <span>".$row["num_child"].'</span></p>'.
                                        '<p>'."Giá vé trẻ em: <span>".$row["price_child"].'</span></p>'.
                                        '<span class="booking_now">Đặt vé ngay</span>'.
                                    '</li>'.
                                '</ul>';
                                ;
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row nav_tab" style="margin-top: 198px;">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab-bootstrap" data-toggle="tab" href="#lotrinhchuyendi"
                            role="tab" aria-controls="content-bootstrap" aria-selected="false">
                            LỘ TRÌNH CHUYẾN ĐI
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-javascript" data-toggle="tab" href="#chitietchuyendi" role="tab"
                            aria-controls="content-javascript" aria-selected="true">
                            Chi tiết chuyến đi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-javascript" data-toggle="tab" href="#cacdichvudikem" role="tab"
                            aria-controls="content-javascript" aria-selected="true">
                            Các dịch vụ đi kèm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-javascript" data-toggle="tab" href="#thongtin" role="tab"
                            aria-controls="content-javascript" aria-selected="true">
                            Thông tin về địa điểm du lịch
                        </a>
                    </li>

                </ul>
            </div>
            <div class="content_tablist">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="lotrinhchuyendi" role="tabpanel"
                        aria-labelledby="tab-javascript">
                        <i class="fa fa-map-marker" style="font-size:48px;color:red"></i>
                        <a> TP. HỒ CHÍ MINH - ĐÀ NẴNG - HỘI AN Số bữa ăn: 02 (Ăn trưa, chiều)
                            (1/11/2019)</a>
                        <p>Quý khách tập trung tại cột số 5, Ga đi trong nước, sân bay Tân Sơn Nhất, hướng
                            dẫn
                            viên Vietravel hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng, tại sân
                            bay Đà
                            Nẵng xe và HDV đón đoàn đi tham quan:
                            <br> - Bán đảo Sơn Trà và Chùa Linh Ứng - Nơi chiêm ngưỡng toàn cảnh thành phố,
                            núi
                            rừng và
                            biển đảo Sơn Trà một cách hoàn hảo nhất, với tượng Phật Quan Thế Âm cao nhất
                            Việt
                            Nam,…
                            <br> - Bãi biển Mỹ Khê - Một trong những bãi biển quyến rũ nhất hành tinh, Quý
                            khách
                            tự do
                            tắm biển…
                            <br> - Phố Cổ Hội An - Chùa Cầu, dạo phố đèn lồng đầy màu sắc, cảm nhận sự yên
                            bình,
                            cổ kính,
                            lãng mạn Hội An, thả hoa đăng cầu bình an, may mắn trên Sông Hoài,…
                            <br> - Ăn chiều. Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà
                            Nẵng.
                        </p>
                        <hr>

                        <i class="fa fa-map-marker" style="font-size:48px;color:red"></i>
                        <a> TP. HỒ CHÍ MINH - ĐÀ NẴNG - HỘI AN Số bữa ăn: 02 (Ăn trưa, chiều)
                            (2/11/2019)</a>
                        <p>Quý khách tập trung tại cột số 5, Ga đi trong nước, sân bay Tân Sơn Nhất, hướng
                            dẫn
                            viên Vietravel hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng, tại sân
                            bay Đà
                            Nẵng xe và HDV đón đoàn đi tham quan:
                            <br> - Bán đảo Sơn Trà và Chùa Linh Ứng - Nơi chiêm ngưỡng toàn cảnh thành phố,
                            núi
                            rừng và
                            biển đảo Sơn Trà một cách hoàn hảo nhất, với tượng Phật Quan Thế Âm cao nhất
                            Việt
                            Nam,…
                            <br> - Bãi biển Mỹ Khê - Một trong những bãi biển quyến rũ nhất hành tinh, Quý
                            khách
                            tự do
                            tắm biển…
                            <br> - Phố Cổ Hội An - Chùa Cầu, dạo phố đèn lồng đầy màu sắc, cảm nhận sự yên
                            bình,
                            cổ kính,
                            lãng mạn Hội An, thả hoa đăng cầu bình an, may mắn trên Sông Hoài,…
                            <br> - Ăn chiều. Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà
                            Nẵng.
                        </p>
                        <hr>
                        <i class="fa fa-map-marker" style="font-size:48px;color:red"></i>
                        <a> TP. HỒ CHÍ MINH - ĐÀ NẴNG - HỘI AN Số bữa ăn: 02 (Ăn trưa, chiều)
                            (3/11/2019)</a>
                        <p>Quý khách tập trung tại cột số 5, Ga đi trong nước, sân bay Tân Sơn Nhất, hướng
                            dẫn
                            viên Vietravel hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng, tại sân
                            bay Đà
                            Nẵng xe và HDV đón đoàn đi tham quan:
                            <br> - Bán đảo Sơn Trà và Chùa Linh Ứng - Nơi chiêm ngưỡng toàn cảnh thành phố,
                            núi
                            rừng và
                            biển đảo Sơn Trà một cách hoàn hảo nhất, với tượng Phật Quan Thế Âm cao nhất
                            Việt
                            Nam,…
                            <br> - Bãi biển Mỹ Khê - Một trong những bãi biển quyến rũ nhất hành tinh, Quý
                            khách
                            tự do
                            tắm biển…
                            <br> - Phố Cổ Hội An - Chùa Cầu, dạo phố đèn lồng đầy màu sắc, cảm nhận sự yên
                            bình,
                            cổ kính,
                            lãng mạn Hội An, thả hoa đăng cầu bình an, may mắn trên Sông Hoài,…
                            <br> - Ăn chiều. Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà
                            Nẵng.
                        </p>
                        <hr>
                        <i class="fa fa-map-marker" style="font-size:48px;color:red"></i>
                        <a> TP. HỒ CHÍ MINH - ĐÀ NẴNG - HỘI AN Số bữa ăn: 02 (Ăn trưa, chiều)
                            (5/11/2019)</a>
                        <p>Quý khách tập trung tại cột số 5, Ga đi trong nước, sân bay Tân Sơn Nhất, hướng
                            dẫn
                            viên Vietravel hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng, tại sân
                            bay Đà
                            Nẵng xe và HDV đón đoàn đi tham quan:
                            <br> - Bán đảo Sơn Trà và Chùa Linh Ứng - Nơi chiêm ngưỡng toàn cảnh thành phố,
                            núi
                            rừng và
                            biển đảo Sơn Trà một cách hoàn hảo nhất, với tượng Phật Quan Thế Âm cao nhất
                            Việt
                            Nam,…
                            <br> - Bãi biển Mỹ Khê - Một trong những bãi biển quyến rũ nhất hành tinh, Quý
                            khách
                            tự do
                            tắm biển…
                            <br> - Phố Cổ Hội An - Chùa Cầu, dạo phố đèn lồng đầy màu sắc, cảm nhận sự yên
                            bình,
                            cổ kính,
                            lãng mạn Hội An, thả hoa đăng cầu bình an, may mắn trên Sông Hoài,…
                            <br> - Ăn chiều. Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà
                            Nẵng.
                        </p>
                        <hr>
                        <i class="fa fa-map-marker" style="font-size:48px;color:red"></i>
                        <a> TP. HỒ CHÍ MINH - ĐÀ NẴNG - HỘI AN Số bữa ăn: 02 (Ăn trưa, chiều)
                            (6/11/2019)</a>
                        <p>Quý khách tập trung tại cột số 5, Ga đi trong nước, sân bay Tân Sơn Nhất, hướng
                            dẫn
                            viên Vietravel hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng, tại sân
                            bay Đà
                            Nẵng xe và HDV đón đoàn đi tham quan:
                            <br> - Bán đảo Sơn Trà và Chùa Linh Ứng - Nơi chiêm ngưỡng toàn cảnh thành phố,
                            núi
                            rừng và
                            biển đảo Sơn Trà một cách hoàn hảo nhất, với tượng Phật Quan Thế Âm cao nhất
                            Việt
                            Nam,…
                            <br> - Bãi biển Mỹ Khê - Một trong những bãi biển quyến rũ nhất hành tinh, Quý
                            khách
                            tự do
                            tắm biển…
                            <br> - Phố Cổ Hội An - Chùa Cầu, dạo phố đèn lồng đầy màu sắc, cảm nhận sự yên
                            bình,
                            cổ kính,
                            lãng mạn Hội An, thả hoa đăng cầu bình an, may mắn trên Sông Hoài,…
                            <br> - Ăn chiều. Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà
                            Nẵng.
                        </p>
                        <hr>
                    </div>
                    <div class="tab-pane fade" id="chitietchuyendi" role="tabpanel" aria-labelledby="tab-css">
                       
                    </div>
                    <div class="tab-pane fade " id="cacdichvudikem" role="tabpanel" aria-labelledby="tab-bootstrap">
                       
                    </div>
                    <div class="tab-pane fade " id="thongtin" role="tabpanel" aria-labelledby="tab-bootstrap">
                       
                    </div>
                </div>
            </div>
        </div>
        <app-footer></app-footer>
    </div>
    <?php include_once __DIR__ ."/commont_layout/footer.html"?>
</body>

</html>