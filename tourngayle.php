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
    <?php echo '<h3 class="h3_" style="margin-bottom:30px">Tours ngày lễ</h3>';?>
    <div class="row">
        <?php 
            $select="select * from tour where id_category='3'";
            $result=mysqli_query( $connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<div class='col-sm-3 item' style='float:left'>
                            <div class='item'>
                                <div class='tour-col-sm-3'>
                                    <img src='admin/images/".$row['img_url']."'>".
                                    "<h5>".$row['name_tour']."</h5>".
                                    "<p>Nơi khởi hành:".$row['place_start']."</p>".
                                    "<p>Điêm dừng chân:".$row['place_des']."</p>".
                                    "<p>Thời khởi hành:".$row['date_go']."</p>".
                                    "<p>Thời gian trở về:".$row['date_back']."</p>
                                    <a href='booktour.php?id=".
                                    $row['id_tour']."'".
                                    ">Xem chi tiết".
                                    "</a>
                                </div>
                            </div>
                        </div>";
                }
            }
        ?>
    </div>
</div>

 <?php include_once __DIR__ ."/commont_layout/footer.html"?>
</body>

</html>