<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Appoinment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
				<form id="contact-form" method="post" action="sendmail.php" role="form">
				
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
					</div>
					
					<div id="mail-success" class="success">
						Thank you. The Mailman is on His Way :)
					</div>
					
					<div id="mail-fail" class="error">
						Sorry, don't know what happened. Try later :(
					</div>
					
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
					</div>						
					
				</form>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="Appoinment">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>