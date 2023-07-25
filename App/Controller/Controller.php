<?php
require_once('../Config/database.php');
require_once('../Models/Breath.php');

if ($_POST["module"] == "setValue") {

  $db = new Database();

  $breath = new Breath($db);

  $breath->setStart($_POST["start"]);
    $breath->setJump( $_POST["jump"]);

    echo "string";exit;
  $breath->setIdUser('0');




  $breath->updateBreath();
  echo json_encode($breath->getMaterials());
}

 ?>
