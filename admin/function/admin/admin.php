<?php 
   
    // ///////////////////////////////////////
    include 'booking-server.php';
    //use TourObject\Tour;
  //  include 'model/connectDB.php';
    use model\connectDB;      
    
    class TXSBooking{
        private $connectDB="";
        public $admin="";
        public function __construct(){
            $this->admin=new ArrayObject();
            $this->connectDB=new connectDB("tctdlich");
            $this->connectDB->connect();
        }
        public function HienThi(){
            $select="select * from acountadmin";
            $i=0;
            $result=mysqli_query( $this->connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $row=(object) $row;
                   $this->admin[$i]=$row;
                   $i++;
                }
            }
            return $this->admin;
        }
        public function Them($admin){
            $admin;
            $sql="insert into acountadmin(UserName,Pass,mail)
                values('$admin->UserName','$admin->Pass','$admin->mail')";
            //$result=mysqli_query( $connectDB->conn, $select);

            if (mysqli_query($this->connectDB->conn, $sql)) {
                return true;
            
            } else {
               return false;
            }
        }
        // public function Sua($guider){
        //     $sql="
        //     update from tour_guider
        //     set name_guider='$guider->name_guider';
        //     update from tour_guider
        //     set birthday='$guider->birthday';
        //     update from tour_guider
        //     set tel='$guider->tel';
        //     update from tour_guider
        //     set  img_url->img_url='$guider->img_url';
        //     ";
        // }
        public function Xoa($id){
            $sql="delete from admin where id =".$id;
            if (mysqli_query($this->connectDB->conn, $sql)) {
                return true;
            } else {
                return false;   
            }
        }
    }
    // $tour=new TXSTour();
    // print_r($tour->HienThi()) ;   
?>