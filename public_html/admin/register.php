<?php

	include_once '../config.php';
	
	if(isset($_POST['register']) && $_POST['register'] == 'Register')
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$valid=true;
		$error=array();
		
		if($name ==''){
			$valid=false;
			$error['name']="Plese enter the name";
		}
		
		if($email ==''){
			$valid=false;
			$error['email']="Plese enter the email";
		}
		if($password ==''){
			$valid=false;
			$error['password']="Plese enter password";
		}
		
		if($valid==true){
		
			$sql = "INSERT INTO admin_info (name.email,password)
			VALUES ('".$name."','".$email."','".$password."')";
			
			if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
		
		}
	}
?>	
	<?php include 'script.php';?>
	
	
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            
			<input type="submit" class="btn btn-primary btn-block" name="register" value="Register" >
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->




  