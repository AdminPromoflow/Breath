<?php
require_once('../Config/database.php');
require_once('../Models/Breath.php');

if ($_POST["module"] == "setValue") {

  $db = new Database();

  $breath = new Breath($db);

  $breath->setStart($_POST["start"]);
    $breath->setJump( $_POST["jump"]);


  $breath->setIdUser("0");

    //echo "string";exit;


  echo $breath->updateBreath();
  //echo json_encode($breath->getMaterials());
}

if ($_POST["module"] == "getValue") {
 echo $_POST["module"];

}

 ?>
