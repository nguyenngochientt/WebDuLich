<?php include_once __DIR__."/layout/header.php" ?>
<!-- page content -->
<div class="row">
    <div class="col-sm-12">
        <div class="right_col" role="main">
            <div>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm mới</h2>
                        <h2><small>Điền đủ thông tin về hướng dẫn viên du lịch bên dưới</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="x_content">
                            <form method="get">
                                <form class="form-horizontal form-label-left">

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Tên hướng dẫn viên</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Tên hướng dẫn viên...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Ngày sinh</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Ngày sinh...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Đại chỉ</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" placeholder="Địa chỉ...">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Số điến thoại</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control"
                                                placeholder="Số điến thoại...">
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3">
                                            <button type="button" class="btn btn-primary">Cancel</button>
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                    <div class="x_panel">
                  <div class="x_title">
                    <h2>Dropzone multiple file uploader</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                    <form action="form_upload.html" class="dropzone"></form>
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>
                </div>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?php include_once __DIR__."/layout/footer.php" ?>