<?php include_once __DIR__."/layout/header.php" ?>
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
                                        <th>ID hướng dẫn viên</th>
                                        <th>Tên hướng dẫn viên</th>
                                        <th>Ngày sinh</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nguyễn Ngọc Hiền</td>
                                        <td>21/2/1998</td>
                                        <td>Diên Lạc</td>
                                        <td>0328627664</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nguyễn Ngọc Hiền</td>
                                        <td>21/2/1998</td>
                                        <td>Diên Lạc</td>
                                        <td>0328627664</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Nguyễn Ngọc Hiền</td>
                                        <td>21/2/1998</td>
                                        <td>Diên Lạc</td>
                                        <td>0328627664</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Nguyễn Ngọc Hiền</td>
                                        <td>21/2/1998</td>
                                        <td>Diên Lạc</td>
                                        <td>0328627664</td>
                                    </tr>
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