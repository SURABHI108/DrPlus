<?php
include 'config.php';

$required = '';

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
       $sql = "select * from ragister_user where email='".$email."' and password='".$password."'";
        $rs = mysqli_query($conn, $sql);
        if(mysqli_num_rows($rs) != 0){
            
            $fetchRow = mysqli_fetch_assoc($rs);
            
            $_SESSION['id'] = $fetchRow['id'];
            $_SESSION['email'] = $fetchRow['email'];
            
            //  header("location:home.php");
            include "home.php";
            exit();
           
        }
        else{
            $required = "<p style='color:red;'> Email and Password wrong </p>"  ;
        }
        
    }
    
}
?>


<?php include 'script.php';?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

	<title>Ncc  Login</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/logo1.png" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
	<section class="vh-100" style="background-color:#353b43;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" >
              <img
                src="images/login/11.png"
                alt="login form"
                class="img-fluid " style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
            	<input type="hidden" name="id" value="<?php echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">
              <div class="card-body p-4 p-lg-5 text-black">


		<form class="login-form" method="post" action="">




			<input type="hidden" name="id" value="<?php echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">

                  <div class="d-flex align-items-center mb-3 pb-1">
<!--                     <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
 -->                    <span class="h1 fw-bold mb-0"><p style="color:#79AA2F;font-size:200%;">Dr<span style="color:#4e595f;">plus</span></p></span>
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
              <?php echo $required; ?>

                  <div class="form-outline mb-4">
                  
                    <input type="email" class="form-control" placeholder="email" name="email" value="">
                    <div class="error text-danger"><?php echo isset($error['email']) ? $error['email'] : ''; ?></div>
										
                  </div>

                  <div class="form-outline mb-4">
                  	
                    <input type="password" class="form-control" placeholder="Password" name="password" value="">
                  <div class="error text-danger"><?php echo isset($error['password']) ? $error['password'] : ''; ?></div>
                  <div class="pt-1 mb-4"><br>
                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign In" >
                  </div>





                  <a class="small text-muted" href="forgetpassword.php">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>





                        </div>
                </div>
        </form>
	</div>









</section>
</body>
</html>