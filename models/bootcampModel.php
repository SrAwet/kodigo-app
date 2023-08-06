<?php
    // vamos a definir como viene y como luce mi informacion

    class Bootcamp{
        private $conn;

        public function __construct(){
            $this->conn = new mysqli("127.0.0.1", 'root', '', 'kodigo');
         if ($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
         }
         echo 'Connection succesfully';
        }

        //Obtiene todos los bootcamps
        public function get_bootcamps(){
            // Creo la consulta
            $sql ="SELECT * FROM bootcamps";
            //Ejecuto la consulta
            $result = $this->conn->query($sql);
            $bootcamps = array();

            //Transformo a un array
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    $bootcamps[] = $row;
                }
            }
            return $bootcamps;
        }
    }
?>