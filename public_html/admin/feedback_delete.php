<?php

include '../config.php';

$id = $_GET['id']; 
$del = mysqli_query($conn,"DELETE from contect_us where id = $id"); 

if($del)
{
    mysqli_close($conn);
    // header("location:feedback.php"); 
    include "feedback.php";
    exit();
}
else
{
    echo "Error deleting record";  
}
?>