<?php
    class Breath {
    /*  private $idUser;
      private $name;
      private $NIT;
      private $email;
      private $company;
      private $positionCompany;
      private $phone;
      private $date;*/
      private $start;
      private $jump;
      private $updateBreath;
      private $conn;

       function __construct($conn) {
            $this->conn = $conn;
        }
       function setStart($start){
          $this->start = $start;
        }
        function setJump($jump){
          $this->jump = $jump;
        }
        function updateBreath(){
          echo "hola";
        }

    /*     function setEmail($email){
          $this->email = $email;
        }
        function setName($name){
          $this->name = $name;
        }

        function setNIT($NIT){
          $this->NIT = $NIT;
        }

        function setCompany($company){
          $this->company = $company;
        }

        function setPositionCompany($positionCompany){
          $this->positionCompany = $positionCompany;
        }

        function setPhoneNumber($phone){
          $this->phone = $phone;
        }

        function setDate($date){
          $this->date = $date;
        }

        function createUser(){
         try{
            $sql = "INSERT INTO `Users`(`name`, `NIT`, `email`,  `phoneNumber`, `TimeAppoiment`, `company`, `positionCompany`)
            VALUES ('$this->name', '$this->NIT','$this->email', '$this->phone', '$this->date', '$this->company', '$this->positionCompany')";
            $this->conn->conn()->exec($sql);
            $this->conn->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }


        function readUserExist(){
         try{
           $sql = $this->conn->conn()->query("SELECT COUNT(*) FROM `Users`  WHERE `email` = '$this->email'");
          $data = $sql->fetch(PDO::FETCH_ASSOC);
          $this->conn->close();
          return $data;
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }



        function updateUser(){
          try{
            $sql = "UPDATE
            `Users`
            SET `name` =  '$this->name',
             `NIT` =  '$this->NIT',
             `TimeAppoiment` =  '$this->date',
             `company` =  '$this->company',
             `positionCompany` =  '$this->positionCompany'

            WHERE `email` = '$this->email'
            ";
            $this->conn->conn()->exec($sql);
            $this->conn->close();
              }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

        function lastIdUser(){
         try{
            $sql = $this->conn->conn()->query("SELECT `idUser` FROM `Users` ORDER BY `idUser`DESC LIMIT 1  ");
            $data = $sql->fetch(PDO::FETCH_OBJ);
            $this->conn->close();
            return $data;
            }
          catch(PDOException $e){
              echo $query . "<br>" . $e->getMessage();
            }
        }

*/
}
?>
