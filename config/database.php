<?php
class Database {
    private $localhost="localhost";
    private $db_name ="my_application";
    private $user ="root";
    private $password ="Rahma_2000";
    public $conn;

    public function __construct()
{
        try{
            $this->conn  = new PDO("mysql:host=$this->localhost;dbname=$this->db_name",$this->user,$this->password);
//            echo "success";
        } catch(PDOException $error){
            echo "failed".$error->getMessage();


                 }
    }
}



?>