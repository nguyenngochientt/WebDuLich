<?php include_once __DIR__."/header.php" ?>
<!-- page content -->
<div class="row">
    <div class="col-sm-12">
        <div class="right_col" role="main">
            <div>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Thêm mới</h2>
                        <h2><small>Thêm mới loại tour</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="x_content">
                            <form method="post" actioin="">
                                <form class="form-horizontal form-label-left">

                                    <div class="form-group row ">
                                        <label class="control-label col-md-3 col-sm-3 ">Tên loại tour</label>
                                        <div class="col-md-9 col-sm-9 ">
                                            <input type="text" class="form-control" name="TenLT" placeholder="Tên loại tour...">
                                        </div>
                                    </div>
                                  
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9  offset-md-3">
                                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                    <?php 
                                    if(isset($_POST['submit'])){
                                        $TenLT="";
                                        if(isset($_POST['TenLT'])){
                                            $TenLT=$_POST['TenLT'];
                                        }
                                        
                                        $sql="insert into category(name_category)
                                        values('".$TenLT."')";
                                        //$result=mysqli_query( $connectDB->conn, $select);
        
                                        if (mysqli_query($connectDB->conn, $sql)) {
                                            // echo "New record created successfully";
                                        
                                        } else {
                                            echo "Error: " . $sql . "<br>" . mysqli_error($connectDB->conn);
                                        }

                                    }
                                       
                                    ?>
                                    <div class="x_panel">

              
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
<?php include_once __DIR__."/footer.php" ?>