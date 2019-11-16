<?php
    $con=mysqli_connect('localhost','root','','webdl') or die('Không thể kết nối với database');
    $sql='select * from usertb';
    $result=mysqli_query($con, $sql);
    if (!$result){
        die ('Câu truy vấn bị sai');
    }
    while ($row = mysqli_fetch_assoc($result)){
    //   foreach($row as $value){
    //       echo $value."<br>";
    //   }
    var_dump($row);
    }
?>