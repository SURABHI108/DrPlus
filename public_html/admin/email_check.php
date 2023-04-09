
<?php
include_once '../config.php';

if(!empty(isset($_POST['email'])) && isset($_POST['email'])){

   $emailInput= $_POST['email'];
   checkEmail($conn, $emailInput);
  
}




function checkEmail($conn, $emailInput){

  $query = "SELECT email FROM admin_info WHERE email='$emailInput'";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    echo false;
  }
  else{
    echo true;
  }
}



?>