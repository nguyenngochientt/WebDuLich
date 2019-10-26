<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Notable&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link ref="stylesheet" href="css/menu_dropdown.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="booking/js/booking.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="public/slider_booking/slider.css" rel="stylesheet">
    <link href="scss/style.css" rel="stylesheet">
    <script>
    $(document).ready(function() {
        jQuery('#camera_wrap').camera({
            loader: false,
            pagination: false,
            minHeight: '444',
            thumbnails: false,
            height: '48.375%',
            caption: true,
            navigation: true,
            fx: 'mosaic'
        });
        /*carousel*/
        var owl = $("#owl");
        owl.owlCarousel({
            items: 2, //10 items above 1000px browser width
            itemsDesktop: [995, 2], //5 items between 1000px and 901px
            itemsDesktopSmall: [767, 2], // betweem 900px and 601px
            itemsTablet: [700, 2], //2 items between 600 and 0
            itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
            navigation: true,
            pagination: false
        });
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
    </script>
</head>

<body>
    <!--==============================header=================================-->
    <div class="page1 " id="top">
        <header>

            <div class="top_header ">
                <ul>
                    <li>
                        <span class="glyphicon glyphicon-earphone" style='font-size:15px;color:red'></span>
                        <a href="#">91898778</a>
                    </li>
                    <li>
                        <span class="glyphicon glyphicon-map-marker" style='font-size:15px;color:red'></span>
                        <a href="#">Hà Nội</a>
                    </li>
                    <li>
                        <span class='glyphicon glyphicon-envelope' style='font-size:15px;color:red'></span>
                        <a href="#">mail@travel_book.com</a>
                    </li>
                </ul>
            </div>

            <div class="clear"></div>
            <div class="header-menu">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link " href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tours</a>
                    </li>
                    <li class="d-inline-block nav-item">
                        <a id="dropdownBasic1" ngbDropdownToggle href="#" class="nav-link">Thể loại</a>
                        <div class="bg_drop">
                            <button ngbDropdownItem>Du lịch trong nước</button>
                            <button ngbDropdownItem>Du lịch ngoài nước </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cẩm nang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="slider_wrapper">
            <div id="camera_wrap" class="">
                <div data-src="images/slide.jpg">
                    <div class="caption fadeIn">
                        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">ĐÀ LẠT</h2>
                        <div class="price">
                            Chỉ từ
                            <span>2tr</span>
                        </div>

                        <a href="booking_tour.php">Thông tin thêm</a>
                    </div>
                </div>
                <div data-src="images/slide1.jpg">
                    <div class="caption fadeIn ">
                        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">NINH BÌNH</h2>
                        <div class="price">
                            Chỉ từ
                            <span>3.5tr</span>
                        </div>
                        <a href="booking_tour.php">Thông tin thêm</a>
                    </div>
                </div>
                <div data-src="images/slide2.jpg">
                    <div class="caption fadeIn">
                        <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">HÀ NỘI</h2>
                        <div class="price">
                            Chỉ từ
                            <span>2tr</span>
                        </div>
                        <a href="booking_tour.php">Thông tin thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!--==============================Content=================================-->
        <div class="">
            <div class="container_12">
                <div class="grid_4_">
                    <div class="media_">
                        <div class="banner zoom">
                            <div class="label">
                                <div class="title name_tour_tt">
                                    <p>Đà Lạt</p>
                                </div>
                                <div class="price">FROM<span>2.500.000 tr</span></div>
                                <a href="booking_tour.php">Đặt ngay</a>
                            </div>
                            <img src="images/iloveimg-resized/dalt.jpg" alt="">
                        </div>
                    </div>

                </div>
                <div class="grid_4_ ">
                    <div class="media_">
                        <div class="banner zoom">
                            <img src="images/iloveimg-resized/hoian.jpg" alt="">
                            <div class="label">
                                <div class="title name_tour_tt">
                                    <p>Hội An</p>
                                </div>
                                <div class="price">FROM<span>3.500.000 tr</span></div>
                                <a href="booking_tour.php">Đặt ngay</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="grid_4_ ">
                    <div class="media_">
                        <div class="banner zoom">
                            <img src="images/iloveimg-resized/quynhon.jpg" alt="">
                            <div class="label">
                                <div class="title name_tour_tt">
                                    <p>Quy Nhơn</p>
                                </div>
                                <div class="price">FROM<span>1.500.000 tr</span></div>
                                <a href="booking_tour.php">Đặt ngay</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="clear"></div>
        <!--==============================footer=================================-->

    </div>
    <!-- ==============================main======================================= -->
    <div class="space container"></div>
    <div class=" container">
        <div class="row ">
            <div class="tag_ col-sm-8" style="padding-left:0px;margin-left:0px">
                <ul style="padding:0px;margin:0px">
                    <li>
                        <a href="#" class="wrap_choose_city">
                            <span class="fas fa-city"></span>
                            <span class="glyphicon glyphicon-triangle-bottom"></span>
                            <span class="text_detail_choose_city">Chọn tỉnh thành</span>
                        </a>

                        <ul class="ul_tag">
                            <span class="glyphicon glyphicon-triangle-top connect_span"></span>
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>
                            <li>
                                <a href="#">Khánh Hòa</a>
                            </li>
                            <li>
                                <a href="#">Quảng Ninh</a>
                            </li>
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>
                            <li>
                                <a href="#">Khánh Hòa</a>
                            </li>
                            <li>
                                <a href="#">Quảng Ninh</a>
                            </li>
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>
                            <li>
                                <a href="#">Khánh Hòa</a>
                            </li>
                            <li>
                                <a href="#">Quảng Ninh</a>
                            </li>
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>
                            <li>
                                <a href="#">Khánh Hòa</a>
                            </li>
                            <li>
                                <a href="#">Quảng Ninh</a>
                            </li>
                            <li>
                                <a href="#">Hà Nội</a>
                            </li>
                            <li>
                                <a href="#">Hồ Chí Minh</a>
                            </li>
                            <li>
                                <a href="#">Đà Nẵng</a>
                            </li>


                        </ul>
                    </li>
                </ul>

            </div>
            <div class="search-box col-sm-4">
                <form class="search-form">
                    <input class="form-control" placeholder="Tìm kiếm" type="text">
                    <button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>