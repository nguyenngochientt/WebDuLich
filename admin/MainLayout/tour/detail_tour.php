<?php include_once __DIR__."/header.php" ?>

<!-- page content -->
<div class="row">
    <div class="col-sm-12">
        <div class="right_col" role="main">
            <!-- <div class=""> -->
            <div class="page-title">
                <div class="title_left">
                    <h3>Tour <small>Trang quản lí các tour du lịch</small></h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Bảng điều khiển </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                         
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
                                            <div class=row>
                                                <div class="col-sm-6">'.
                                                    '<p>'.'Mã tour: '.$row["id_tour"].'</p>'.
                                                    '<p>'."Tên tour du lịch: ".$row["name_tour"].'</p>'.
                                                    '<p>'."Loại tour: ".$row["name_category"].'</p>'.
                                                    '<p>'."Hướng dẫn viên: ".$row["name_guider"].'</p>'.
                                                    '<p>'."Nơi khởi hành: ".$row["place_start"].'</p>'.
                                                    '<p>'."Ngày khởi hành: ".$row["date_go"].'</p>'.
                                                    '<p>'."Điểm dừng chân: ".$row["place_des"].'</p>'.
                                                    '</div>
                                                <div class="col-sm-6">'.
                                                    '<p>'."Ngày trở về: ".$row["date_back"].'</p>'.
                                                    '<p>'."Vùng miền : ".$row["name_region"].'</p>'.
                                                    '<p>'."Số vé người lớn: ".$row["num_adults"].'</p>'.
                                                    '<p>'."Giá vé người lớn: ".$row["price_adult"].'</p>'.
                                                    '<p>'."Số vé trẻ em: ".$row["num_child"].'</p>'.
                                                    '<p>'."Giá vé trẻ em: ".$row["price_child"].'</p>'.
                                                '</div>'.
                                           '</div>'
                                            ;
                                        }
                                    }
                                }
                                     
                                 ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
</div>
<!-- /page content -->
<?php include_once __DIR__."/footer.php" ?>