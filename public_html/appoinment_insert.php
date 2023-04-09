
<?php
 include "config.php";

if(isset($_POST['book']))
{
    extract($_POST);
    $error=array();
    $flag=0;

    if(!empty($name))
       {
             
                $_SESSION['book']['name']=$name;
            
       }
       else{
          $error[]= "Please Enter Your Name !";
          $flag=1;
       }


    if(!empty($email))
       {
             
                $_SESSION['book']['email']=$email;
            
       }
       else{
          $error[]= "Please Enter email  !";
          $flag=1;
       }


       if(!empty($fdate))
       {
             
                $_SESSION['book']['fdate']=$fdate;
            
       }
       else{
          $error[]= "Please Enter date and time  !";
          $flag=1;
       }


       // if(!empty($time))
       // {
             
       //          $_SESSION['book']['time']=$time;
            
       // }
       // else{
       //    $error[]= "Please Enter time  !";
       //    $flag=1;
       // }


       if(!empty($contect))
       {
             if(!is_numeric($contect))
             {
                $error[]= "Mobile Number is Numbers only !";
                $flag=1;
             }else{
                if (strlen($contect)!=10) {
                  $error[]= "Mobile Number is 10 Digits only...";
                  $flag=1;
                }
                else
                {
                  $_SESSION['book']['contect']=$contect;
                }
             }
       }
       else{
          $error[]= "Please Enter Mobile Number !";
          $flag=1;
       }


       if(!isset($_POST['select_id']))
        { 
            $error[] = "Please Spacilitys!"; 
            $flag=1;     
        }
        else{
            $_SESSION['book']['select_id']=$select_id;
        }


        if(!isset($_POST['symptoms']))
        { 
            $error[] = "Pleas enter symptoms!"; 
            $flag=1;     
        }
        else{
            $_SESSION['book']['symptoms']=$symptoms;
        }

   

     if ($flag==0) 
         {
              $appoinment_insert= "INSERT INTO appoinment(name,email,contect,fdate,select_id,symptoms) VALUES ( '$name','$email','$contect','$fdate','$select_id','$symptoms')";
                mysqli_query($conn,$appoinment_insert);

                if(mysqli_affected_rows($conn) > 0){
                    unset($_SESSION['book']);
                    
                    } else {
                   
                    echo mysqli_error ($conn);
                }
            
         }
                else
                {
                  $_SESSION['error']=$error;
                }
}
 ?>
 