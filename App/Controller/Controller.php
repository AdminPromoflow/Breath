<?php
require_once('../Config/database.php');
require_once('../Models/Breath.php');

if ($_POST["module"] == "setValue") {

  $db = new Database();

  $breath = new Breath($db);

  $breath->setStart($_POST["start"]);
  $breath->setidUser(0);

  $breath->setJump( $_POST["jump"]);

  $breath->updateBreath();
  echo json_encode($breath->getMaterials());
}

 ?>
