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
                                        <th style="width:17px"> Xóa</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php
                                    include "../../../admin/function/tour/tour.php";
                                    $tour=new TXSTour();
                                    foreach($tour->HienThi() as $key => $value){
                                        echo 
                                        '<tr >
                                            <td>'.$value->id_tour.'</td>'.
                                            '<td>'.$value->name_tour.'</td>'.
                                            '<td>'.$value->place_start.'</td>'.
                                            '<td>'.$value->date_go.'</td>'.
                                            '<td>'.
                                                '<a href="detail_tour.php?id='.
                                                $value->id_tour.'"'.
                                                    '>Xem chi tiết'.
                                                '</a></td>'.
                                            '<td> <a href="tour.php?id='.$value->id_tour.'"><img src="../../../assets/icon/delete.png" style="width:70%"></a> </td>'. 
                                        '</tr>';
                                     }
                                    if(isset($_GET['id'])){
                                        $id=$_GET['id'];
                                       
                                        if( $tour->Xoa($id)){
                                            echo '<script type="text/javascript"> alert("Xóa thành công")</script>';
                                            }
                                            else{
                                                echo '<script type="text/javascript"> alert("Xóa không thành công")</script>';
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