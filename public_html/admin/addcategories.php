<?php


include '../config.php';
include 'menu.php';

if(isset($_POST['add']) && $_POST['add'] == 'Add categories')
{
	$cate_name=$_POST['cate_name'];
	$id=$_POST['id'];
	
	$valid=true;
	$error=array();
	
	if($cate_name == '')
	{
		$valid=false;
		$error['cate_name']="Please enter categories name ";
	}
	
	if($valid==true){
		
		if($id != ''){
			$sql = "update categories set cate_name='".$cate_name."' where id=" . $_GET['id'];
			if ($conn->query($sql) === TRUE) {
				
					 echo"";
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
		}
		
		else{
		$sql = "INSERT INTO categories (cate_name)
		VALUES ('".$cate_name."')";
		if ($conn->query($sql) === TRUE) {
					echo ""; 
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
		}
	}
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "select * from categories where id=" . $_GET['id'] ;
    $rs = mysqli_query($conn, $sql);
	$fetchRow = mysqli_fetch_assoc($rs);
	if($rs->num_rows == 0){
            
            header("location:categories.php");
        }
}

?>



<div class="content-wrapper">
	<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><a href="categories.php"><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Add Categories</span> </h4>
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
		<div class="content">
			<div class="card">

				<form method="post" action="">
					<input type="hidden" name="id" value="<?php echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">

					<div class="form-group">
						<label for="title">Categories Name</label>
						<input type="text" class="form-control" name="cate_name" value="<?php echo isset($fetchRow['cate_name']) && !empty($fetchRow['cate_name']) ? $fetchRow['cate_name'] : ''; ?>">
						<div><?php echo isset($error['cate_name']) ? $error['cate_name'] : ''; ?></div>
					</div>
					<div class="from-group">
						<input type="submit" class="btn btn-info" name="add" value="Add categories">
					</div>
				</form>
			</div>
		</div>
	<?php include 'footer.php' ;?>
</div>