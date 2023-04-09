
<?php
session_start();
include 'config.php';

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
       $sql = "select * from register_user where  email='".$email."' and password='".$password."'";
        $rs = mysqli_query($conn, $sql);
            $fetchRow = mysqli_fetch_assoc($rs);
        if($fetchRow != 0){
            
            $fetchRow = mysqli_fetch_assoc($rs);
            
            $_SESSION['login']['id'] = $fetchRow['id'];
            $_SESSION['login']['email'] = $fetchRow['email'];
            
            header("location:index.php");
           
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

	<title>Drplus Login</title>
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
	<section class="vh-100" style="background-color:#c7cbff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style="padding-top:110px; padding-left:90px;">
              <img
                src="images/login/11.png"
                alt="login form"
                class="img-fluid " style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">

              <div class="card-body p-4 p-lg-5 text-black">
              

		<form class="login-form" method="post" action="" id="login_form">

            	     <input type="hidden" name="id" value="<?php echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">
<?php echo $required; ?>
	

		
<!-- 			<input type="hidden" name="id" value="echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">
 -->                
					<?php echo $required; ?>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <input type="hidden" name="id" value="<?php echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">
                    
                    <span class="h1 fw-bold mb-0"><p style="color:#79AA2F;font-size:200%;">Dr<span style="color:#4e595f;">plus</span></p></span>
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" >Email address</label>
                    <input type="email" name="email"  id="email" class="form-control form-control-lg" value="" />
                    <div class="error"><?php echo isset($error['email']) ? $error['email'] : ''; ?></div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" >Password</label>
                    <input type="password" name="password" id="Password" class="form-control form-control-lg" value=""/>
                  <div class="error"><?php echo isset($error['password']) ? $error['password'] : ''; ?></div>
                  </div>
                  <div class="pt-1 mb-4">
                                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign In" > 
                  </div>
                              
                        

                        

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                              

                                

                                
                        </div>
                </div>
        </form>
	</div>




                  



           
</section>

<!-- jquary validation 
         ============================================================== -->
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/jquery.validate.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.12.0/additional-methods.js"></script>

 <script type="text/javascript">

         $( "#login_form" ).validate({
           rules: {
            email: {
               required: true
             },
            password: {
               required: true
             }
            
           }
        });

    </script>
</body>
</html>