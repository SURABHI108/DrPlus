<?php

include '../config.php';

$id = $_GET['id']; 
$del = mysqli_query($conn,"DELETE from appoinment where id = $id"); 

if($del)
{
    mysqli_close($conn);
    // header("location:appoinmnet.php");
    include "appoinmnet.php";
    exit();
}
else
{
    echo "Error deleting record";  
}
?>