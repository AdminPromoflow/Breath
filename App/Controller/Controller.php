<?php
require_once('../Config/database.php');
echo "string";exit;
require_once('../App/Models/Breath.php');
if ($_POST["module"] == "setValue") {

  $db = new Database();

  $breath = new Breath($db);

  $breath->setStart($_POST["start"]);
  $breath->setJump( $_POST["jump"]);
  $breath->updateBreath();

  //echo json_encode($breath->getMaterials());
}

 ?>
