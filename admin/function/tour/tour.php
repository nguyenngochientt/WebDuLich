<?php 
   
    // ///////////////////////////////////////
    include 'tour-server.php';
    //use TourObject\Tour;
  //  include 'model/connectDB.php';
    use model\connectDB;      
    
    class TXSTour{
        private $connectDB="";
        public $tour="";
        public function __construct(){
            $this->tour=new ArrayObject();
            $this->connectDB=new connectDB("tctdlich");
            $this->connectDB->connect();
        }
        public function HienThi(){
            $select="select * from tour";
            $i=0;
            $result=mysqli_query( $this->connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                
                while($row=mysqli_fetch_assoc($result)){
                    $row=(object) $row;
                   $this->tour[$i]=$row;
                   $i++;
                  
                }
            }
            
            return $this->tour;
        }
        public function Them($tour){
            $tour;
            $sql="insert into tour(name_tour,tour_guide_id,place_start,place_des,date_go,date_back,img_url,num_adults,num_child,price_adult,price_child)
                values('".$tour->name_tour."','".$tour->tour_guide_id."','".$tour->place_start."','".$tour->place_des."','".$tour->date_go."','".$tour->date_back."','".$tour->img_url."','".$tour->num_adult."','".$tour->num_child."','".$tour->price_adults."','".$tour->price_child."')";
            //$result=mysqli_query( $connectDB->conn, $select);

            if (mysqli_query($this->connectDB->conn, $sql)) {
                // echo "New record created successfully";
            
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->connectDB->conn);
            }
        }
        public function Sua($tour){
            $sql="
            update from tour
            set name_tour='$tour->name_tour';
            update from tour
            set tour_guide_id='$tour->tour_guide_id';
            update from tour
            set place_start='$tour->place_start';
            update from tour
            set place_des='$tour->place_des';
            update from tour
            set date_go='$tour->date_go';
            update from tour
            set date_back='$tour->date_back';
            ";
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