<?php
 include "config.php";
 

if(isset($_POST['con_submit']))
{
    extract($_POST);
  

     
                $contect_insert="INSERT INTO contect_us(name,email,subject,message) VALUES ( '$con_name', '$con_email', '$con_subject', '$con_message')";
                mysqli_query($conn,$contect_insert);

                if(mysqli_affected_rows($conn) > 0){
                    echo "Our Team Contect You Very Soon...";
                    
                    
                    } else {
                    echo mysqli_error ($conn);
                }
            
         
}
 ?>