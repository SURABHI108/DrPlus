<?php


include '../config.php';
include 'menu.php';

if(@$_POST['submit'])
{
    
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];


if($file_name!="" && ($file_type="images/jpeg"||$file_type="images/png"||$file_type="images/gif")&& $file_size<=614400)

if(move_uploaded_file ($file_path,'images/'.$file_name))
$query=mysql_query("INSERT INTO services_image(image_name)values('$file_name')");
 
if($query==true)
{
    echo "File Uploaded";
}
}

// $result=  mysql_query("SELECT photo FROM user");
// $row=  mysql_fetch_array($result);
// echo "<img src='images/".$row['photo']."' height = '130px' width = '130px'>";
?>



<div class="content-wrapper">
	<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><a href="images.php"><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Add Images</span> </h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>

				<!-- <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="datatable_basic.html" class="breadcrumb-item">Datatables</a>
							<span class="breadcrumb-item active">Basic</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				  
				</div> -->
	</div>
		<div class="content">
			<div class="card">

				<form method="POST" action="addimage.php" enctype="multipart/form-data"	>
					

					<div class="form-group">
						<label for="title"><b>Select Image</b></label>
						<input type="file" class="form-control" name="file" id="file">
						
					</div>
					<div class="from-group">
						<input type="submit"  class="btn btn-info" value="Upload Image" name="submit">
						 
					</div>
				</form>
			</div>
		</div>
	<?php include 'footer.php' ;?>
</div>