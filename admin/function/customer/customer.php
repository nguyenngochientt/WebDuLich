<?php 
    include 'customer-server.php';
    use model\connectDB;      
    class TXSCustomer{
        private $connectDB="";
        public $cus="";
        public function __construct(){
            $this->cus=new ArrayObject();
            $this->connectDB=new connectDB("tctdlich");
            $this->connectDB->connect();
        }
        public function HienThi(){
            $select="select * from customer";
            $i=0;
            $result=mysqli_query( $this->connectDB->conn, $select);
            if(mysqli_num_rows($result)>0){
                
                while($row=mysqli_fetch_assoc($result)){
                    $row=(object) $row;
                   $this->cus[$i]=$row;
                   $i++;
                  
                }
            }
            
            return $this->cus;
        }
        public function Them($cus){
            $cus;
            $sql="insert into customer(name_customer,tel,email,state)
                values('$cus->name_customer','$cus->tel','$cus->email','$cus->state')";
            //$result=mysqli_query( $connectDB->conn, $select);

            if (mysqli_query($this->connectDB->conn, $sql)) {
                // echo "New record created successfully";
            
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->connectDB->conn);
            }
        }
        public function Xoa($id){
            $sql="delete from customer where id_customer ='".$id."'";
            if (mysqli_query($this->connectDB->conn, $sql)) {
                 echo "Xóa thành công";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->connectDB->conn);
            }
        }
    }
?>