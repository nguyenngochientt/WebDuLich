<?php 
   
    // ///////////////////////////////////////
    include 'tour-server.php';
    use TourOpject\Tour;
    include '../../../model/connectDB.php';
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
            // foreach($this->tour as $key => $value){
            //    echo 
            //    "<h4>".$value->name_tour."</h4>"
            //    .$value->id_tour."<br>"
            //    .$value->tour_guide_id."<br>"
            //    .$value->place_start."<br>"
            //    .$value->place_des."<br>"
            //     ;
            // }
            return $this->tour;
        }
        public function Them($name_tour,$tour_guider_id,$id_region,$place_start,$place_des,$date_go,$date_back,$image,$num_adult,$num_child,$price_adutls,$price_child,$id_category){
            
            $sql="insert into tour(name_tour,tour_guide_id,id_region,place_start,place_des,date_go,date_back,img_url,num_adults,num_child,price_adult,price_child,id_category)
                values('".$name_tour."','".$tour_guider_id."','".$id_region."','".$place_start."','".$place_des."','".$date_go."','".$date_back."','".$image."','".$num_adult."','".$num_child."','".$price_adutls."','".$price_child."','".$id_category."')";
            //$result=mysqli_query( $connectDB->conn, $select);

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