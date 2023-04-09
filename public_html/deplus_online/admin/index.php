<?php
include '../config.php';

$required='';


if(isset($_POST['submit']) && $_POST['submit'] == 'Sign In'){
    $email=$_POST['email'];
    $password=$_POST['password'];
	$id=$_POST['id'];
    
    $valid=true;
    $error= array();
    
    if($email ==''){
        $valid=false;
        $error['email']="Plese enter email or phone number";
    }
     if($password ==''){
        $valid=false;
        $error['password']="Plese enter password";
    }
    
    if($valid==true){
       $sql = "select * from admin_info where  email='".$email."' and password='".$password."'";
        $rs = mysqli_query($conn, $sql);
        if(mysqli_num_rows($rs) != 0){
            
            $fetchRow = mysqli_fetch_assoc($rs);
            
            $_SESSION['login']['id'] = $fetchRow['id'];
            $_SESSION['login']['email'] = $fetchRow['email'];
            
            // header("location:https://labour-saving-magni.000webhostapp.com/admin/main.php");
            include "main.php";
            exit();
       
            unset($_SESSION['login']);
        }
        else{
            $required = "<p style='color:red;'> Email and Password wrong </p>"  ;
        }
        
    }
    
}
?>


<?php include 'script.php';?>

<html>
	<head>
		<title></title>
		<style>
			.error{color:white;}
		</style>
	</head>

<body>

	<div class="content d-flex justify-content-center align-items-center bg-secondary bg-gradient">
		

		<form class="login-form" method="post" action="">
		
			<input type="hidden" name="id" value="<?php echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">
                <div class="card mb-0 bg-dark">
					<?php echo $required; ?>
                        <div class="card-body">
                                <div class="text-center mb-3">
                                        <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i><br>
                                        <img src="images/full_logo.png" style="width:140px;height: 40px;"  alt="Website Logo"  >
                                        <h5 class="mb-0">Login to your account</h5>
                                        <span class="d-block text-muted"></span>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="email" class="form-control" placeholder="email" name="email" value="">
										<div class="error"><?php echo isset($error['email']) ? $error['email'] : ''; ?></div>
                                        <div class="form-control-feedback">
                                                <i class="icon-user text-muted" style="padding-top: 11px;"></i>
                                        </div>
										
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="">
									<div class="error"><?php echo isset($error['password']) ? $error['password'] : ''; ?></div>
                                        <div class="form-control-feedback">
                                                <i class="icon-lock2 text-muted" style="padding-top: 11px;"></i>
                                        </div>
										
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign In" > 
                                </div>

                                <div class="text-center">
                                        <a href="login_password_recover.html">Forgot password?</a>
                                </div>
                        </div>
                </div>
        </form>
	</div>



</body>
</html>	