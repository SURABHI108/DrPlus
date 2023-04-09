<?php

include_once '../config.php';
include_once 'menu.php';

if(isset($_POST['addbrand']) && $_POST['addbrand'] == 'Add Brand'){
	$brand_name=$_POST['brand_name'];
	$id = $_POST['id'];
	
	$valid=true;
	$error=array();
	
	if($brand_name == ''){
		$valid=false;
		$error['brand_name'] = "Please enter brand";
	}
	else{
        $where = $id != '' ? ' AND id != '.$id : '';
        $duplicate=mysqli_query($conn,"select brand_name from brands where  brand_name='".$brand_name."' {$where}");
        
        if (mysqli_num_rows($duplicate)>0)
        {
            $valid=false;
            $error['brand_name']= "Brand  already exists";
        }
    }
	
	if($valid==true){
		
		if($id != ''){
		
			$sql = "UPDATE brands SET brand_name='".$brand_name."' where id=" . $_GET['id'];
            if ($conn->query($sql) === TRUE) {
                echo "";
				
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
		
		}
		else{
		
			$sql = "INSERT INTO brands (brand_name)
			VALUES ('".$brand_name."')";
			if ($conn->query($sql) === TRUE) {
					echo "";
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
		}
	}
}
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "select * from brands where id=" . $_GET['id'] ;
    $rs = mysqli_query($conn, $sql);
	$fetchRow = mysqli_fetch_assoc($rs);
	if($rs->num_rows == 0){
            
            header("location:brandmaster.php");
        }
}
	
?>
<div class="content-wrapper">
		<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Brand Master </span> </h4>
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

				<div>

					<form method="post" action="">
						<input type="hidden" name="id" value="<?php echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">

						<div class="form-group">
							<label for="name">Brand Name</label>
							<input type="text" class="form-control" name="brand_name" value="<?php echo isset($fetchRow['brand_name']) && !empty($fetchRow['brand_name']) ? $fetchRow['brand_name'] : ''; ?>">
							<div><?php echo isset($error['brand_name']) ? $error['brand_name'] : ''; ?></div>

						</div>
						
						<div class="from-group">
						
						 <input type="submit" class="btn btn-success" name="addbrand" value="Add Brand" >
						</div>
						
					</form>

				</div>
			</div>
		</div>
		<?php include 'footer.php' ;?>
</div>
