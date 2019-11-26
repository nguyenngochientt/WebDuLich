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
                            <form method="get" action="">

                                <form class="form-horizontal form-label-left">

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Tên tour du lịch</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Tour du lịch...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Hướng dẫn viên</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <select class="form-control">
                                                <option>Choose option</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3 col-sm-3 ">Vùng niềm</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <select class="form-control">
                                                <option>Choose option</option>
                                                <option>Option one</option>
                                                <option>Option two</option>
                                                <option>Option three</option>
                                                <option>Option four</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Nơi khởi hành</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Nơi khởi hành...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Điểm dừng chân</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Điểm dừng chân...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Thời gian khởi hành</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control"
                                                placeholder="Thời gian khởi hành...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Thời gian kết thúc</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Thời gian kết thúc...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Giá vé người lớn</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Giá vé người lớn...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Số vé trẻ em còn trống</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control"
                                                placeholder="Số vé trẻ em còn trống...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Số vé người lớn còn
                                            trống</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control"
                                                placeholder="Số vé người lớn còn trống...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Giá vé trẻ em</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Giá vé trẻ em...">
                                        </div>
                                    </div>
                                    <!-- up load -->

                                    <!-- end up load -->


                                </form>
                            </form>
                            <?php include __DIR__."/ul.php" ?>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="button" class="btn btn-primary">Cancel</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php include_once __DIR__."/layout/footer.php" ?>