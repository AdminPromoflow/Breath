<?php
    class Database{
      private  $servername = 'localhost';
      private $dbname = "u473339840_Breath";
      private $username = "u473339840_Ale";
      private $password = "NVF2023!170599Ln";
      private  $conn;
      public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            }
      }
      public function conn(){
        return   $this->conn;
      }
      public function close(){
          $this->conn = null;
      }
    }
?>
