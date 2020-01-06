<?php include_once __DIR__."/header.php" ?>
<!-- page content -->
<div class="row">
    <div class="col-sm-12">
        <div class="right_col" role="main">
            <!-- <div class=""> -->
            <div class="page-title">
                <div class="title_left">
                    <h3>Tour <small>Trang quản lí hướng dẫn viên du lịch</small></h3>
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
                            <h2>Bảng điều khiển <small>Tours</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    
                                    <tr>
                                        <th>Mã số</th>
                                        <th>Tên hướng dẫn viên</th>
                                        <th>Ngày sinh</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th style="width:17px"> Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                     $select="select * from tour_guider";
                                     $result=mysqli_query( $connectDB->conn, $select);
                                     if(mysqli_num_rows($result)>0){
                                         while($row=mysqli_fetch_assoc($result)){
                                             echo '
                                             <tr >
                                                <td>'.$row["id_guider"].'</td>'.
                                                '<td>'.$row["name_guider"].'</td>'.
                                                '<td>'.$row["birthday"].'</td>'.
                                                '<td>'.$row["address"].'</td>'.
                                                '<td>'.$row["tel"].'</td>'.  
                                                '<td> <button style="outline:0;border:0;width:34px;background:none" type="submit" name="xoa"><img src="../../../assets/icon/delete.png" style="width:100%"></button> </td>'. 
                                            '</tr>'
                                             ;
                                         }
                                     }
                                       
                                 ?>
                                </tbody>
                            </table>
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