<?php

include '../config.php';
include 'menu.php';

extract($_POST);

if(count($_POST)>0) 
   {
	   mysqli_query($conn,"UPDATE contect_us set  name='$name', email='$email', subject='$subject', message='$message' WHERE id='" . $_POST['id'] . "'");
	   //header("Location:feedback.php");
	   include "feedback.php";
	   exit();
   }
   $result = mysqli_query($conn,"SELECT * FROM contect_us WHERE id='" . $_GET['id'] . "'");
   $row= mysqli_fetch_array($result);
   

?>
<div class="content-wrapper" >
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Contact </span> </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="datatable_basic.html" class="breadcrumb-item">Datatables</a>
                    <span class="breadcrumb-item active">Basic</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

          
        </div>
    </div>
    <div class="content " >
        <div class="card " style="background-image: linear-gradient(to bottom right, gray, black);width: 50%; align-items: center;">
				
			<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
				
				<form id="contact-form" method="post" action="" role="form">
				
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name" value="<?php echo $row["name"]; ?>">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" value="<?php echo $row["email"]; ?>">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" value="<?php echo $row["subject"]; ?>">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" value="<?php echo $row["message"]; ?>"></textarea>	
					</div>
					
					
					
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit" name="submit">
					</div>						
					
				</form>
			</div>
		</div>
	</div>