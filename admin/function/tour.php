 <?php 
// Ấn định  dung lượng file ảnh upload
define ("MAX_SIZE","8000");

// hàm này đọc phần mở rộng của file. Nó được dùng để kiểm tra nếu
// file này có phải là file hình hay không .
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}

//This variable is used as a flag. The value is initialized with 0 (meaning no
// error  found)
//and it will be changed to 1 if an errro occures.
//If the error occures the file will not be uploaded.
$errors=0;
//checks if the form has been submitted
if(isset($_POST['Submit']))
{
// lấy tên file upload
$image=$_FILES['image']['name'];
// Nếu nó không rỗng
if ($image)
{
// Lấy tên gốc của file
$filename = stripslashes($_FILES['image']['name']);
//Lấy phần mở rộng của file
$extension = getExtension($filename);
$extension = strtolower($extension);
// Nếu nó không phải là file hình thì sẽ thông báo lỗi
if (($extension != "jpg") && ($extension != "jpeg") && ($extension !=
"png") && ($extension != "gif"))
{
// xuất lỗi ra màn hình
echo '<h1>Đây không phải là file hình!</h1>';
$errors=1;
}
else
{
//Lấy dung lượng của file upload
$size=filesize($_FILES['image']['tmp_name']);
if ($size > MAX_SIZE*1024)
{
echo '<h1>Vượt quá dung lượng cho phép!</h1>';
$errors=1;
}

// đặt tên mới cho file hình up lên
$image_name=time().'.'.$extension;
// gán thêm cho file này đường dẫn
$newname="images/".$image_name;
// kiểm tra xem file hình này đã upload lên trước đó chưa
//$copied = copy($_FILES['image']['tmp_name'], $newname);
// if (!$copied)
// {
// echo '<p> File hình này đã tồn tại </p>';
// $errors=1;
// }
}}}

if(isset($_POST['Submit']) && !$errors)
{
    echo "<p>File hình đã được Upload thành công </p>";
}
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