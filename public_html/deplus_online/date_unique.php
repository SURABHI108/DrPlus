<?php
include "config.php";

if(!empty(isset($_POST['fdate'])) && isset($_POST['fdate'])){

   $dateInput= $_POST['fdate'];
   checkDate($conn, $dateInput);
  
}




function checkDate($conn, $dateInput){

  $query = "SELECT fdate FROM appoinment WHERE fdate='$dateInput'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    echo false;
  }
  else{
    echo true;
  }
}



?>