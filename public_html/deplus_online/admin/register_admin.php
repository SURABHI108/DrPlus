<?php 

include_once '../config.php';
include 'menu.php';


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
          $admin_insert= "INSERT INTO admin_info(name,email,password) VALUES ('$name','$email','$password')";
            mysqli_query($conn,$admin_insert);
            if(mysqli_affected_rows($conn) > 0){
              echo "<p>Admin Added</p>";
              header("Location:register_admin.php");
              unset($_SESSION['user']);
   
            } else {
              echo "Admin NOT Added<br />";
              echo mysqli_error ($conn);
            }
        }
        else
        {
          $_SESSION['error']=$error;
        }
}



?>

<?php include 'script.php';?>
	
<div class="content-wrapper">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <a  href="main.php"> <h4><i class="fas fa-home"></i> <span class="font-weight-semibold"> Dashboard</span> </h4></a>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            
        </div>

        <!-- <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="main.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="datatable_basic.html" class="breadcrumb-item">Datatables</a>
                    <span class="breadcrumb-item active">Basic</span>
                </div> -->

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            
     <!--    </div>
    </div> -->
    <div class="content">
        <div class="card">
            
           

           <div class="content d-flex justify-content-center align-items-center">

    <form class="login-form" method="POST" id="ragister">
                <div class="card mb-0 bg-dark">
                        <div class="card-body">
                                       <a href="main.php"><i class="bi bi-x-square-fill float-right btn-danger"></i></a>
                                <div class="text-center mb-3">
                                        <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i><br>
                                        <img src="images/full_logo.png" style="width:140px;height: 40px;"  alt="Website Logo"  >
                                        <h5 class="mb-0"><b>Register New Admin</b></h5>
                                        <span class="d-block text-muted"></span>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" class="form-control" placeholder="User Name" name="name" value="">
                                        <div class="form-control-feedback">
                                                <i class="icon-user text-muted" style="padding-top: 11px;"></i>
                                        </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="email" class="form-control" placeholder="email" name="email" value="">
                                        <div class="form-control-feedback">
                                                <i  class="fas fa-envelope" style="padding-top: 11px;color: gray;"></i>
                                        </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password-8 charcter only" name="password" value="">
                                        <div class="form-control-feedback">
                                                <i class="icon-lock2 text-muted" style="padding-top: 11px;"></i>
                                        </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block" name="submit" value="Sign in" > 
                                </div>

                                <div class="text-center">
                                        <a href="login_password_recover.html">Forgot password?</a>
                                </div>
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
                        </div>
                </div>
        </form>
</div>

           
            
            
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>  

<!-- jquary validation 
         ============================================================== -->
      <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
      <script>

         jQuery.validator.addMethod("emailunique", function(value, element) {
                        let emailInput = $('#email').val();
                        var result = false;
                            $.ajax({
                               type:"POST",
                                url: "email_check.php",
                                async:false,
                                data:{email:emailInput},
                                method:"POST",
                                success:function(resp)
                                {
                                    result = (resp == true) ? true: false;
                                }
                            });     
                            return result;
                    }, "This email has been already taken.");




         $( "#ragister" ).validate({
           rules: {
             name: {
               required: true,
               lettersonly: true 
             },
             email: {
               required: true,
               emailunique:true
         
             },
             password: {
               required: true
             }
           }
        });

    </script>