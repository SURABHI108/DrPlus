<?php
	include 'config.php';


	
	$name=$_POST['con_name'];
	$phone=$_POST['con_email'];
	$email=$_POST['con_subject'];
	$password=$_POST['con_message'];
		$query="INSERT INTO contect_us  
                  (name,email, subject,message)
                   VALUES ('$con_name', '$con_email',
                   '$con_subject','$con_message')";
               mysqli_query($conn,$query);
            
               if(mysqli_affected_rows($db)>0){
                  $array['success']=1;
                  if(isset($_SESSION['user'])){
	                  unset($_SESSION['user']);
                  }
                  echo json_encode($array);
                  }
               else{
                  $array['success']=0;
                  echo json_encode($array);
                  }

 ?>




