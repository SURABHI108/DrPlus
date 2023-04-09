<?php
include "config.php";

if(!empty(isset($_POST['time'])) && isset($_POST['time'])){

   $timeInput= $_POST['time'];
   checktime($conn, $timeInput);
  
}




function checktime($conn, $timeInput){

  $query = "SELECT time FROM appoinment WHERE time='$timeInput'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    echo false;
  }
  else{
    echo true;
  }
}



?>