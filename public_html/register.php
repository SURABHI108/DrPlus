<?php 
  include_once 'config.php';

if(isset($_POST['submit']))
{
  extract($_POST);
  $error=array();
  $flag=0;

  if(!empty($name))
     {
           if(!ctype_alpha($name))
           {
              $error[]= "Name is Character only !";
              $flag=1;
           }else{
              $_SESSION['user']['name']=$name;
           }
     }
     else{
        $error[]= "Please Enter First Name !";
        $flag=1;
     }

     if(!empty($phone))
       {
             if(!is_numeric($phone))
             {
                $error[]= "Mobile Number is Numbers only !";
                $flag=1;
             }else{
                if (strlen($phone)!=10) {
                  $error[]= "Mobile Number is 10 Digits only...";
                  $flag=1;
                }
                else
                {
                  $_SESSION['user']['phone']=$phone;
                }
             }
       }else{
        $error[]= "Please Enter phone number  !";
        $flag=1;
     }

     if(!empty($email))
     {
          $_SESSION['user']['email']=$email;     
     }
     else{
        $error[]= "Please Enter Email !";
        $flag=1;
     }

     if(!empty($password))
     {
           if(!is_numeric($password))
           {
              $error[]= "password is Numbers only !";
              $flag=1;
           }else{
              if (strlen($password)!=8) {
                  $error[]= "Password is 8 Digits only...";
                  $flag=1;
                }
                else
                {
                  $_SESSION['user']['password']=$password;
                }

           }
     }
     else{
        $error[]= "Please Enter Password !";
        $flag=1;
     }

      if ($flag==0) 
       {
          $admin_insert= "INSERT INTO ragister_user(name,phone,email,password) VALUES ('$name','phone','$email','$password')";
            mysqli_query($conn,$admin_insert);
            if(mysqli_affected_rows($conn) > 0){
              echo "<p>register user Added</p>";
            //   header("Location:index.php");
            include "index.php";
            exit();
              unset($_SESSION['user']);
   
            } else {
              echo "register user NOT Added<br />";
              echo mysqli_error ($conn);
            }
        }
        else
        {
          $_SESSION['error']=$error;
        }
}
?>


<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

	<title>Drplus Register</title>
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
  <?php if (isset($_SESSION['error'])) 
    {?>
          <div class="alert alert-danger m-4" role="alert">
          <h4 class="alert-heading"><i class="bi bi-exclamation-octagon-fill"></i> Error!</h4><hr>
      <?php 
      foreach ($_SESSION['error'] as $value)
      {
        echo "<ul><li>".$value."</li></ul>";
      } unset($_SESSION['error']);
    }
     ?>
	<section class="vh-100" style="background-color:#353b43;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="images/login/11.png"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="register.php" id="register_login">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><p style="color:#79AA2F;font-size:200%;">Dr<span style="color:#4e595f;">plus</span></p></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17" >Your Name</label>
                    <input type="text" name="name"  class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Phone Number</label>
                    <input type="text" name="phone"  class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" name="email"  class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" name="submit" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">You have an account? <a href="index.php" style="color: #393f81;">Login here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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

         $( "#register_login" ).validate({
           rules: {
            name: {
               required: true
             },
            phone: {
               required: true
             },
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