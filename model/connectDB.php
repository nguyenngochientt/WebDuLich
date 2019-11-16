<?php 
    namespace model;
    class connectDB
    {
        private  $db_name=" ";
        public  $conn="";
        public function __construct($db_name)
        {
            $this->db_name=$db_name;
        }
        public  function connect(){
            $this->conn=mysqli_connect("localhost","root","");
            mysqli_set_charset($this->conn, 'UTF8');
            if (! $this->conn) {
                die("Database connection failed: " . mysqli_connect_error());
            }
            $db_select=mysqli_select_db( $this->conn,$this->db_name);
            if(!$db_select){
                die("Database selection failed: " . mysqli_error( $this->conn));
            }
        }
    }
?>