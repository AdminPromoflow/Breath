<?php
if ($_POST["module"] == "setValue") {
  $db = new Database();
  $breath = new Breath($db);
  echo "string";exit;
  $breath->setStart($_POST["start"]);
  $breath->setJump( $_POST["jump"]);
  $breath->updateBreath();

  //echo json_encode($breath->getMaterials());
}

 ?>
