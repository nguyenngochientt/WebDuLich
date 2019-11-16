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
    <!-- hot tour -->
    <?php include_once __DIR__."/commont_layout/hottours.html" ?>
    <!-- end hot tour -->
    <!-- new tour -->
    <!-- sale -->
    <?php include_once __DIR__."/commont_layout/sale.html" ?>
    <!-- end sale -->
    <?php include_once __DIR__."/commont_layout/newtour.php" ?>
    <!-- end new tour -->
 <?php include_once __DIR__ ."/commont_layout/footer.html"?>
</body>

</html>