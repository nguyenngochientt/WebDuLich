<?php include_once __DIR__."/layout/header.php" ?>

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
                            <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" action="function/tour.php">
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Tên tour du lịch</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="name_tour" placeholder="Tour du lịch...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3 ">Loại tour</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        
                                        <select class="form-control" name="id_category">
                                        <?php
                                            $select="select * from category";
                                            $result=mysqli_query( $connectDB->conn, $select);
                                            if(mysqli_num_rows($result)>0){
                                                while($row=mysqli_fetch_assoc($result)){
                                                    echo '
                                                        <option>'.$row["id_category"].'</option>';
                                                    ;
                                                }
                                            }
                                        ?>
                                        </select>
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
                                <div class="form-group row">
                                    <label class="control-label col-md-3 col-sm-3 ">Vùng niềm</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <select class="form-control" name="id_region">
                                            <?php
                                                $select="select * from region";
                                                $result=mysqli_query( $connectDB->conn, $select);
                                                if(mysqli_num_rows($result)>0){
                                                    while($row=mysqli_fetch_assoc($result)){
                                                        echo '
                                                            <option>'.$row["id_region"].'</option>';
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
                                        <input type="text" class="form-control" name="date_start"
                                            placeholder="Thời gian khởi hành...">
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
                                        <input type="text" class="form-control" name="price_child"
                                            placeholder="Giá vé trẻ em...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Số vé người lớn còn
                                        trống</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control" name="num_adult"
                                            placeholder="Số vé người lớn còn trống...">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Số vé trẻ em</label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="text" class="form-control"  name="num_child" placeholder="Số vé trẻ em...">
                                    </div>
                                </div>
                                <!-- up load -->
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Tải ảnh lên</label>
                                    <div class="col-md-9 col-sm-9 ">
                                  
                                        <!-- nhớ đặt enctype to "multipart/frm-data"
                                        và sử dụng  input type "file" -->
                                        <!-- <form name="newad" method="post" enctype="multipart/form-data" action="">
                                            <table> -->
                                            <input type="file" name="image">
                                            <!-- <tr><td><input name="Submit" type="submit" value="Upload image">
                                            </td></tr>
                                            </table> -->
                                        <!-- </form> -->
                                     </div>
                                </div>
                                <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Submit</label>
                                    <div class="col-md-9 col-sm-9 ">
                                    <input type="submit"  name="Submit" value="submit">
                                    </div>
                                </div>
                            <div class="box-upload">
                                <!-- end up load -->
                                
                            </form>
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
<!-- /page content -->

<?php include_once __DIR__."/layout/footer.php" ?>