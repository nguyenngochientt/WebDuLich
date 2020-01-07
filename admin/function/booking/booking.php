<?php 
   
    // ///////////////////////////////////////
    include 'booking-server.php';
    //use TourObject\Tour;
  //  include 'model/connectDB.php';
    use model\connectDB;      
    
    class TXSBooking{
        private $connectDB="";
        public $booking="";
        public function __construct(){
            $this->booking=new ArrayObject();
            $this->connectDB=new connectDB("tctdlich");
            $this->connectDB->connect();
        }
        public function HienThi(){
            $select="select booking.*,customer.*,tour.* from booking,tour, customer where booking.id_customer=customer.id_customer and tour.id_tour=booking.id_tour";
            $i=0;
            $result=mysqli_query( $this->connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $row=(object) $row;
                   $this->booking[$i]=$row;
                   $i++;
                }
            }
            return $this->booking;
        }
        public function Them($booking){
            $booking;
            $sql="insert into booking(id_tour,id_customer,num_adults,num_child,date_booking)
                values(' $booking->id_tour',' $booking->id_customer',' $booking->num_adults',' $booking->num_child',' $booking->date_booking')";
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
            $sql="delete from booking where id_booking =".$id;
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