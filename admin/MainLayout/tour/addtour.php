<?php include_once __DIR__."/header.php" ?>
    <!-- page content -->

<div class="row">
    <div class="col-sm-12">
        <div class="right_col" role="main">
            <div>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm mới</h2>
                        <h2><small>Điền đủ thông tin về tour du lịch bên dưới</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="">
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Tên tour du lịch</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="name_tour" placeholder="Tour du lịch...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3 ">Hướng dẫn viên</label>
                                    <div class="col-md-9 col-sm-9 ">

                                        <select class="form-control" name="tour_guider_id">
                                            <?php
                                    $select="select * from tour_guider";
                                    $result=mysqli_query( $connectDB->conn, $select);
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo '
                                                <option>'.$row["id_guider"].'</option>';
                                            ;
                                        }
                                    }
                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Nơi khởi hành</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="place_start" placeholder="Nơi khởi hành...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Điểm dừng chân</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="place_des" placeholder="Điểm dừng chân...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Thời gian khởi hành</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="date_start" placeholder="Thời gian khởi hành...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Thời gian kết thúc</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="date_back" placeholder="Thời gian kết thúc...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Giá vé người lớn</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="price_adutls" placeholder="Giá vé người lớn...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Giá vé trẻ em </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="price_child" placeholder="Giá vé trẻ em...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Số vé người lớn còn trống
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="num_adult" placeholder="Số vé người lớn còn trống...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Số vé trẻ em</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="num_child" placeholder="Số vé trẻ em...">
                                    </div>
                                </div>
                                <!-- up load -->
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Tải ảnh lên</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" name="image">
                                        <!-- nhớ đặt enctype to "multipart/frm-data"-->
                        
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Submit</label>
                                    <div class="col-md-9 col-sm-9 ">

                                        <input type="submit" name="Submit" value="Thêm">
                                    </div>
                                </div>
                             
                                
                            </form>
                        <!--------------------------- php ----------------------------------------------->
                        <?php 
                         //   include "../admin/function/tour/tour-server.php";
                            include "../../../admin/function/tour/tour.php";
                           if(isset($_POST['Submit'])){
                               // Ấn định  dung lượng file ảnh upload
                               define ("MAX_SIZE","8000");

                               // hàm này đọc phần mở rộng của file. Nó được dùng để kiểm tra nếu
                               // file này có phải là file hình hay không .
                               function getExtension($str) {
                                   $i = strrpos($str,".");
                                   if (!$i) { return ""; }
                                   $l = strlen($str) - $i;
                                   $ext = substr($str,$i+1,$l);
                                   return $ext;
                               }
                               
                               //This variable is used as a flag. The value is initialized with 0 (meaning no
                               // error  found)
                               //and it will be changed to 1 if an errro occures.
                               //If the error occures the file will not be uploaded.
                               $errors=0;
                               //checks if the form has been submitted
                               if(isset($_POST['Submit']))
                               {
                               // lấy tên file upload
                               $image=$_FILES['image']['name'];
                               // Nếu nó không rỗng
                               if ($image)
                               {
                               // Lấy tên gốc của file
                               $filename = stripslashes($_FILES['image']['name']);
                               //Lấy phần mở rộng của file
                               $extension = getExtension($filename);
                               $extension = strtolower($extension);
                               // Nếu nó không phải là file hình thì sẽ thông báo lỗi
                               if (($extension != "jpg") && ($extension != "jpeg") && ($extension !=
                               "png") && ($extension != "gif"))
                               {
                               // xuất lỗi ra màn hình
                               echo '<h1>Đây không phải là file hình!</h1>';
                               $errors=1;
                               }
                               else
                               {
                               //Lấy dung lượng của file upload
                               $size=filesize($_FILES['image']['tmp_name']);
                               if ($size > MAX_SIZE*1024)
                               {
                               echo '<h1>Vượt quá dung lượng cho phép!</h1>';
                               $errors=1;
                               }
                               // đặt tên mới cho file hình up lên
                               $image_name=time().'.'.$extension;
                               // gán thêm cho file này đường dẫn
                               $newname="images/".$image_name;
                               // kiểm tra xem file hình này đã upload lên trước đó chưa
                               $copied = copy($_FILES['image']['tmp_name'], $newname);
                               if (!$copied)
                               {
                               // echo '<p> File hình này đã tồn tại </p>';
                               $errors=1;
                               }
                               }
                               }
                               }
                               if(isset($_POST['Submit']) && !$errors)
                               {
                                   // echo "<p>File hình đã được Upload thành công </p>";
                                  
                               }
                               $Addtour=new Tour();
                           
                               $tour=new TXSTour();
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
                               $price_adutls="";
                               if(isset($_POST["price_adutls"])){
                                $Addtour->price_adutls=$_POST["price_adutls"];
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
                               $image=$image_name;
                               $Addtour->img_url=$image;
                               // if(isset($_POST["image"])){
                               //     $image=$_POST["image"];
                               // }
                               $id_category="";
                               if(isset($_POST["id_category"])){
                                $Addtour->id_category=$_POST["id_category"];
                               }
                               
                               print_r($Addtour);
                               $tour->Them($Addtour);
                               //echo '<a  href = "foodlist.php" class="btn btn-primary">Quay lại</a>';
                           }
                         
                        ?>
                            </div>
                            <script src="admin/js/jquery.js"></script>
                            <script src="admin/js/jquery.form.js"></script>
                            <script src="admin/js/main.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once __DIR__."/footer.php" ?>