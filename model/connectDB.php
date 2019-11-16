<?php 
    namespace model;
    class connectDB
    {
        private  $db_name=" ";
        public function __construct($db_name)
        {
            $this->db_name=$db_name;
        }
        public  function connect(){
            $conn=mysqli_connect("localhost","root","");
            if (!$conn) {
                die("Database connection failed: " . mysqli_connect_error());
            }
            $db_select=mysqli_select_db($conn,$this->db_name);
            if(!$db_select){
                die("Database selection failed: " . mysqli_error($conn));
            }
        }
    }
?>