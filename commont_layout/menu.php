<div class="container-fluid">
    <div class="row ">
        <div class="col-sm-12 nav-menu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">TravelBook</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gioithieu.php">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bài viết</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Danh mục
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="tourtrongnuoc.php">Tour trong nước</a>
                                <a class="dropdown-item" href="tourngoainuoc.php">Tour ngoài nước</a>
                                <a class="dropdown-item" href="tourngayle.php">Ngày lễ nước</a>
                                <!-- <?php
                                    $select="select name_category from category";
                                    $result=mysqli_query( $connectDB->conn, $select);
                                    if(mysqli_num_rows($result)>0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo '<a class="dropdown-item" href="tourtrongnuoc.php?id='.$row["id_category"].'">'.$row["name_category"].'</a>';
                                        }
                                    }
                                ?> -->
                            </div>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>