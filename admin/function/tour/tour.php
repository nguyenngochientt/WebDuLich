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
            $sql="insert into tour(name_tour,tour_guide_id,id_region,place_start,place_des,date_go,date_back,img_url,num_adults,num_child,price_adult,price_child,id_category)
                values('".$tour->name_tour."','".$tour->tour_guide_id."','".$tour->id_region."','".$tour->place_start."','".$tour->place_des."','".$tour->date_go."','".$tour->date_back."','".$tour->img_url."','".$tour->num_adult."','".$tour->num_child."','".$tour->price_adults."','".$tour->price_child."','".$tour->id_category."')";
            //$result=mysqli_query( $connectDB->conn, $select);

            if (mysqli_query($this->connectDB->conn, $sql)) {
                // echo "New record created successfully";
            
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->connectDB->conn);
            }
        }
        public function Sua($tour){
            
        }
    }
    // $tour=new TXSTour();
    // print_r($tour->HienThi()) ;   
?>