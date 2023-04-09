<?php
	include 'config.php';


	
	$name=$_POST['name'];
	$phone=$_POST['email'];
	$email=$_POST['contect'];
	$password=$_POST['fdate'];
   $select=$_POST['select_id'];
   $symp=$_POST['symptoms'];
		$query="INSERT INTO login_info  
                  (name,phone,email,
                   password) 
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




