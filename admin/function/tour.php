 <?php 
 
//////
 include '..\..\model\connectDB.php';
 use model\connectDB;
 $connectDB=new connectDB("tctdlich");
 $connectDB->connect();
 //khai báo
$name_tour=$_POST["name_tour"];
$tour_guider_id=$_POST["tour_guider_id"];
$id_region=$_POST["id_region"];
$place_start=$_POST["place_start"];
$place_des=$_POST["place_des"];
$date_go=$_POST["date_start"];
$date_back=$_POST["date_back"];
$price_adutls=$_POST["price_adutls"];
$price_child=$_POST["price_child"];
$num_adult=$_POST["num_adult"];
$num_child=$_POST["num_child"];
$image=$_POST["image"];
$id_category=$_POST["id_category"];
 $sql="insert into tour(name_tour,tour_guide_id,id_region,place_start,place_des,date_go,date_back,img_url,num_adults,num_child,price_adult,price_child,id_category)
     values('$name_tour','$tour_guider_id','$id_region','$place_start','$place_des','$date_go','$date_back','$image','$num_adult','$num_child','$price_adutls','$price_child','$id_category')";
 //$result=mysqli_query( $connectDB->conn, $select);
 
 if (mysqli_query($connectDB->conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connectDB->conn);
}
//echo '<a  href = "foodlist.php" class="btn btn-primary">Quay lại</a>';
 ?> -->