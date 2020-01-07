<?php include_once __DIR__."/header.php" ?>
<!-- page content -->
<div class="row">
    <div class="col-sm-12">
        <div class="right_col" role="main">
            <!-- <div class=""> -->
            <div class="page-title">
                <div class="title_left">
                    <h3>Tour <small>Trang quản lí danh sách đặt tour</small></h3>
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
                                        <th>Tên khách hàng</th>
                                        <th>Tên tour du lịch</th>
                                        <th>Số vé người lớn</th>
                                        <th>Số vé trẻ em</th>
                                        <th>Tổng tiền thanh toán</th>
                                        <th>Thanh toán</th>
                                        <th style="width:17px"> Xóa</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include "../../../admin/function/booking/booking.php";
                                    $booking=new TXSBooking();
                                    foreach($booking->HienThi() as $key => $value){
                                            $tongtien=$value->num_child*$value->price_child+$value->num_adults*$value->price_adult;
                                             echo '
                                             <tr >
                                                <td>'.$value->id_booking.'</td>'.
                                                '<td>'.$value->name_customer.'</td>'.
                                                '<td>'.$value->name_tour.'</td>'.
                                                '<td>'.$value->num_adults.'</td>'.
                                                '<td>'.$value->num_child.'</td>'.
                                                '<td>'.$tongtien.'</td>'.
                                                '<td>'.'Chưa'.'</td>'.
                                                '<td> <a href="booking.php?id='.$value->id_booking.'"><img src="../../../assets/icon/delete.png" style="width:70%"></a> </td>'. 
                                            '</tr>'
                                             ;
                                     }
                                     if(isset($_GET['id'])){
                                        $id=$_GET['id'];
                                        if($booking->Xoa($id)){
                                            echo '<script type="text/javascript"> alert("Xóa thành công")</script>';
                                        }
                                        else{
                                            echo '<script type="text/javascript"> alert("Không thể xóa, dữ liệu tồn tại trong bảng khác")</script>';
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