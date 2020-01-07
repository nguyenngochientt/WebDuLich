<?php include_once __DIR__."/header.php" ?>
<!-- page content -->
<div class="row">
    <div class="col-sm-12">
        <div class="right_col" role="main">
            <!-- <div class=""> -->
            <div class="page-title">
                <div class="title_left">
                    <h3>Tour <small>Trang quản lí khách hàng</small></h3>
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
                                       
                                        <th>Ảnh</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th style="width:17px"> Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include "../../../admin/function/customer/customer.php";
                                    $customer=new TXSCustomer();
                                    foreach($customer->HienThi() as $key => $value){
                                        echo '
                                        <tr >
                                            <td>'.$value->id_customer.'</td>'.
                                            '<td>'.$value->name_customer.'</td>'.
                                            '<td>'.$value->img_url.'</td>'.
                                            '<td>'.$value->tel.'</td>'.
                                            '<td>'.$value->email.'</td>'.  
                                            '<td> <a href="customer.php?id='.$value->id_customer.'"><img src="../../../assets/icon/delete.png" style="width:70%"></a> </td>'. 
                                        '</tr>'
                                        ;
                                    }
                                     if(isset($_GET['id'])){
                                        $id=$_GET['id'];
                                        if($customer->Xoa($id)){
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