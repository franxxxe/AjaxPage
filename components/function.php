<?php
if (isset($_POST["LinkID"])) {
  $Link = $_POST["LinkID"];

  if ($Link == 1){
    echo file_get_contents("home.php");
  }
  elseif ($Link == 2){
    echo file_get_contents("about.php");
  }
  elseif ($Link == 3){
    echo file_get_contents("contact.php");
  }
}

?>