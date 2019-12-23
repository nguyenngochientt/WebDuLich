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
            $this->tour=new ArrayObject(new Tour());
            $this->connectDB=new connectDB("tctdlich");
            $this->connectDB->connect();
        }
        public function HienThi(){
            $select="select * from tour";
            $i=0;
            $result=mysqli_query( $this->connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                   $this->tour->offsetSet($i,$row);
                   
                }
            }
            foreach($this->tour as $key => $value){
                print_r($value) ;
            }
        }
        public function Them(){
            
        }
    }
    $tour=new TXSTour();
    $tour->HienThi();   
?>