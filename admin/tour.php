<?php include_once __DIR__."/layout/header.php" ?>

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
                                        <th>ID Tour</th>
                                        <th>Tên tour</th>
                                        <th style="width:70px">Điểm khởi hành</th>
                                        <th style="width:70px">Thời gian khởi hành</th>
                                        <th style="width:70px">Xem chi tiết</th>
                                     
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php
                                  include '..\..\function\tour\tour.php';
                                  use Tour\Tour;
                                    //  $select="select * from tour";
                                    //  $result=mysqli_query( $connectDB->conn, $select);
                                    //  if(mysqli_num_rows($result)>0){
                                    //      while($row=mysqli_fetch_assoc($result)){
                                    //          echo '
                                    //          <tr >
                                    //             <td>'.$row["id_tour"].'</td>'.
                                    //             '<td>'.$row["name_tour"].'</td>'.
                                    //             '<td>'.$row["place_start"].'</td>'.
                                    //             '<td>'.$row["date_go"].'</td>'.
                                    //             '<td>'.
                                    //                 '<a href="detail_tour.php?id='.
                                    //                     $row["id_tour"].'"'.
                                    //                     '>Xem chi tiết'.
                                    //                 '</a></td>'.
                                    //         '</tr>'
                                    //          ;
                                    //      }
                                    //  }
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
<?php include_once __DIR__."/layout/footer.php" ?>