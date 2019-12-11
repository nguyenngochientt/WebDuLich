<div class="container">
    <?php echo '<h3 class="h3_" style="margin-bottom:30px">Tours mới</h3>';?>
    <div class="row">
        <?php 
            $select="select * from tour";
            $result=mysqli_query( $connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo "<div class='col-sm-3 item' style='float:left'>
                            <div class='item'>
                                <div class='tour-col-sm-3'>
                                    <img src='assets/images/iloveimg-resized/hoian.jpg'>".
                                    "<h5>".$row['name_tour']."</h5>".
                                    "<p>Nơi khởi hành:".$row['place_start']."</p>".
                                    "<p>Điêm dừng chân:".$row['place_des']."</p>".
                                    "<p>Thời khởi hành:".$row['date_go']."</p>".
                                    "<p>Thời gian trở về:".$row['date_back']."</p>
                                    <a class='btn_booking' href='booktour.php'>Xem ngay</a>
                                </div>
                            </div>
                        </div>";
                }
            }
        ?>
    </div>
</div>
