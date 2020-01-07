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
                        <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="">
                           <?php
                                if(isset($_GET['id'])){
                                    $id=$_GET['id'];
                                    $select="select tour.*
                                    from tour
                                    WHERE  id_tour=".$id;
                                    $result=mysqli_query( $connectDB->conn, $select);
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo '
                                           
                                            <div class=row>
                                                <div class="col-sm-6">'.
                                                '<p>'.'Mã tour du lịch: <input   style="width:100%" type=text name="id_tour" value="'.$row["id_tour"].'"</p>'.
                                                    '<p>'.'Tên tour du lịch: <input style="width:100%" type=text name="name_tour" value="'.$row["name_tour"].'"</p>'.
                                                    '<p>'.'Hướng dẫn viên:  <input style="width:100%" type=text name="tour_guider_id" value="'.$row["tour_guide_id"].'"</p>'.
                                                    '<p>'.'Nơi khởi hành: <input style="width:100%" type=text name="place_start" value="'.$row["place_start"].'"</p>'.
                                                    '<p>'.'Ngày khởi hành:  <input style="width:100%" type=text name="date_start" value="'.$row["date_go"].'"</p>'.
                                                    '<p>'.'Điểm dừng chân: <input style="width:100%" type=text name="place_des" value="'.$row["place_des"].'"</p>'.
                                                    '</div>
                                                <div class="col-sm-6">'.
                                                    '<p>'.'Ngày trở về:  <input style="width:100%" type=text name="date_back" value="'.$row["date_back"].'"</p>'.
                                                    '<p>'.'Số vé người lớn:  <input style="width:100%" type=text name="num_adults" value="'.$row["num_adults"].'"</p>'.
                                                    '<p>'.'Giá vé người lớn:  <input style="width:100%" type=text name="price_adult" value="'.$row["price_adult"].'"</p>'.
                                                    '<p>'.'Số vé trẻ em: <input style="width:100%" type=text name="num_child" value="'.$row["num_child"].'"</p>'.
                                                    '<p>'.'Giá vé trẻ em:  <input style="width:100%" type=text name="price_child" value="'.$row["price_child"].'"</p>'.
                                                '</div>'.
                                           '</div>'.
                                           ' <div class=row>'.
                                                '<div style="margin-left: 1%;">'.
                                                    '<p>Ảnh</p>'.
                                                    '<img src="images/'.$row["img_url"].'" style="width:25%">'.
                                                '</div>'.
                                           '</div>'
                                           
                                         
                                            ;
                                        }
                                    }
                                }
                                     
                                 ?>
                                <!-- <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Đổi ảnh</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="image">
                                       
                        
                                    </div>
                                </div> -->
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Submit</label>
                                    <div class="col-md-9 col-sm-9 ">

                                        <input type="submit" name="Submit" value="Sửa">
                                    </div>
                                </div>
                            <form>
                            <?php 
                         //   include "../admin/function/tour/tour-server.php";
                            include "../../../admin/function/tour/tour.php";
                           if(isset($_POST['Submit'])){
                     
                               $Addtour=new Tour();
                           
                               $tour=new TXSTour();
                               $id_tour=0;
                               if(isset($_POST["id_tour"])){
                                $Addtour->id_tour=$_POST["id_tour"];
                               }
                               $name_tour="";
                               if(isset($_POST["name_tour"])){
                                $Addtour->name_tour=$_POST["name_tour"];
                               }
                               $tour_guider_id="";
                               if(isset($_POST["tour_guider_id"])){
                                    $Addtour->tour_guide_id=$_POST["tour_guider_id"];
                               }
                               $id_region="";
                               if(isset($_POST["id_region"])){
                                $Addtour->id_region=$_POST["id_region"];
                               }
                               $place_start="";
                               if(isset($_POST["place_start"])){
                                $Addtour->place_start=$_POST["place_start"];
                               }
                               $place_des="";
                               if(isset($_POST["place_des"])){
                                $Addtour->place_des=$_POST["place_des"];
                               }
                               $date_go="";
                               if(isset($_POST["date_start"])){
                                $Addtour->date_go=$_POST["date_start"];
                               }
                               $date_back="";
                               if(isset($_POST["date_back"])){
                                $Addtour->date_back=$_POST["date_back"];
                               }
                               $price_adult="";
                               if(isset($_POST["price_adult"])){
                                $Addtour->price_adult=$_POST["price_adult"];
                               }
                               $price_child="";
                               if(isset($_POST["price_child"])){
                                $Addtour->price_child=$_POST["price_child"];
                               }
                               $num_adult="";
                               if(isset($_POST["num_adult"])){
                                $Addtour->num_adult=$_POST["num_adult"];
                               }
                               $num_child="";
                               if(isset($_POST["num_child"])){
                                $Addtour->num_child=$_POST["num_child"];
                               }
                            
                               // if(isset($_POST["image"])){
                               //     $image=$_POST["image"];
                               // }
                               $id_category="";
                               if(isset($_POST["id_category"])){
                                $Addtour->id_category=$_POST["id_category"];
                               }
                           
                               if( $tour->Sua($Addtour)){
                                echo '<script type="text/javascript"> alert("Sửa thành công")</script>';
                                }
                                else{
                                    echo '<script type="text/javascript"> alert("Sửa không thành công")</script>';
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