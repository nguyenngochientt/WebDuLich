<?php 
   
    // ///////////////////////////////////////
    include 'category-server.php';
    //use TourObject\Tour;
  //  include 'model/connectDB.php';
    use model\connectDB;      
    
    class TXSCategory{
        private $connectDB="";
        public $category="";
        public function __construct(){
            $this->category=new ArrayObject();
            $this->connectDB=new connectDB("tctdlich");
            $this->connectDB->connect();
        }
        public function HienThi(){
            $select="select * from category";
            $i=0;
            $result=mysqli_query( $this->connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                
                while($row=mysqli_fetch_assoc($result)){
                    $row=(object) $row;
                   $this->category[$i]=$row;
                 
                   $i++;
                  
                }
            }
            
            return $this->category;
        }
        public function TimkiemIDtheoten($name_category){
            $select="select id_category from category where name_category='$name_category'";
            $result=mysqli_query( $this->connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                   echo $row;
                }
            }
        }
        public function Them($category){
            $sql="insert into tour(id_category, name_category)
                values('".$category->id_category."','".$category->name_category."')";
            //$result=mysqli_query( $connectDB->conn, $select);

            if (mysqli_query($this->connectDB->conn, $sql)) {
                // echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->connectDB->conn);
            }
        }
        public function Xoa($id){
            $sql="delete from category where id_category ='".$id."'";
            if (mysqli_query($this->connectDB->conn, $sql)) {
                // echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->connectDB->conn);
            }
        }
    }
    // $tour=new TXSTour();
    // print_r($tour->HienThi()) ;   
?>