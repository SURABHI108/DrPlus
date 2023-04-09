<?php 

include '../config.php';
include 'menu.php'; 

if(isset($_POST['add'])){

	$product_title=$_POST['product_title'];
	$uploadImage = $_FILES['image'];
	$description1=$_POST['description1'];
	$brand=$_POST['brand'];
	$categorie=$_POST['categorie'];
	$price=$_POST['price'];
	$description2=$_POST['description2'];
	$id=$_POST['id'];
    
	
	
	
	$valid=true;
	$error=array();
	$filename = '';
	
	$allowedExt = array('jpg', 'jpeg', 'png', 'gif');
	
	if($product_title == ''){
		$valid=false;
		$error['product_title']="Please enter the product title";
		
	}
	else{
        $where = $id != '' ? ' AND id != '.$id : '';
        $duplicate=mysqli_query($conn,"select product_title from product where product_title='".$product_title."' {$where}");
        
        if (mysqli_num_rows($duplicate)>0)
        {
            $valid=false;
            $error['product_title']= " product already exists";
        }
    }
	 if ($id == '') {
        if ($uploadImage == '') {
            $valid = false;
            $error['image'] = "Plese Upload image";
        }
    }
	
	
    if (isset($uploadImage) && !empty($uploadImage)) {

        $ext = strtolower(pathinfo($uploadImage['name'], PATHINFO_EXTENSION));
        if (in_array($ext, $allowedExt)) {
            $filename = time() . '.' . $ext;
            if($uploadImage['size'] < 5000000) {
				
                move_uploaded_file($uploadImage['tmp_name'], '../upload/' . $filename);
				if($id != ''){
					$duplicate=mysqli_query($conn,"select image from product where id='".$id."'");
				$fetchRow=mysqli_fetch_assoc($duplicate);
				$path = $_SERVER['DOCUMENT_ROOT'] ."/rkhunt/onlineshop/upload/" . $fetchRow['image'];
					if(file_exists($_SERVER['DOCUMENT_ROOT'] ."/rkhunt/onlineshop/upload/" . $fetchRow['image'])){
						unlink($path);
					}
				}
			
            }
            else{
                 $valid = false;
                 $error['image'] = "your image is large";
            }
				
        }
		else {
            $valid = false;
            $error['image'] = "Only image allowed";
        }
		
    }

	if($description1 == ''){
		$valid=false;
		$error['description1']="Please enter the product description";
	}
	if($brand == ''){
		$valid=false;
		$error['brand']="Please enter the product brand";
	}
	if($categorie == ''){
		$valid=false;
		$error['categorie']="Please enter the product categorie";
	}
	if($price == ''){
		$valid=false;
		$error['price']="Please enter the product price";
	}
	if($description2 == ''){
		$valid=false;
		$error['description2']="Please enter the product description";
	}
	
	if($valid==true){
	
		if($id != ''){
			$updateImage = $filename != '' ? ' ,image="'.$filename.'"' : '';				
			$sql = "UPDATE product SET product_title='".$product_title."' {$updateImage}, description1 ='".$description1."', brand ='".$brand."', categorie='".$categorie."',price='".$price."',description2='".$description2."' where id=" . $id;
			if ($conn->query($sql) === TRUE) {
					echo "";
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
				  
		}
		else {
		$sql = "INSERT INTO product (product_title,image,description1,brand,categorie,price,description2)
		VALUES ('".$product_title."','".$filename."','".$description1."','".$brand."','".$categorie."','".$price."','".$description2."') ";
		if ($conn->query($sql) === TRUE) {
                echo "";
				
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
		}
	}
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $sql = "select * from product where id=" . $_GET['id'] ;
    $rs = mysqli_query($conn, $sql);
	$fetchRow = mysqli_fetch_assoc($rs);
	
	
	
}

?>

<div class="content-wrapper">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Add Product</span> 
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
        <!-- Basic layout-->
        <div class="card">
           

            <div class="card-body">
                <form method="post" enctype='multipart/form-data'>
					<input type="hidden" name="id" value="<?php echo isset($fetchRow['id']) && !empty($fetchRow['id']) ? $fetchRow['id'] : ''; ?>">

                    <div class="form-group">
                        <label>Product Title :</label>
                        <input type="text" class="form-control" name="product_title" value="<?php echo isset($fetchRow['product_title']) && !empty($fetchRow['product_title']) ? $fetchRow['product_title'] : ''; ?>" >
						<div><?php echo isset($error['product_title']) ? $error['product_title'] : ''; ?></div>
                    </div>
                    <div class="form-group">
                       
                        <label for="IMAGE">Image</label>
                        <div class="uniform-uploader"> 
							
                            <input type="file" class="form-input-styled"  name="image"  />
							
                            <span class="filename" >No file selected</span>
                            <span class="action btn bg-pink-400">Choose File</span>
                        </div>
                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
							<div><?php echo isset($error['image']) ? $error['image'] : ''; ?></div>
                    </div>
					<div class="form-group">
                       
                        <label for="IMAGE">Image</label>
                        <div class="uniform-uploader"> 
							
                            <input type="file" class="form-input-styled"  name="image"  />
							
                            <span class="filename" >No file selected</span>
                            <span class="action btn bg-pink-400">Choose File</span>
                        </div>
                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
							<div><?php echo isset($error['image']) ? $error['image'] : ''; ?></div>
                    </div>
					<div class="form-group">
                       
                        <label for="IMAGE">Image</label>
                        <div class="uniform-uploader"> 
							
                            <input type="file" class="form-input-styled"  name="image"  />
							
                            <span class="filename" >No file selected</span>
                            <span class="action btn bg-pink-400">Choose File</span>
                        </div>
                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
							<div><?php echo isset($error['image']) ? $error['image'] : ''; ?></div>
                    </div>
					<div class="form-group">
                       
                        <label for="IMAGE">Image</label>
                        <div class="uniform-uploader"> 
							
                            <input type="file" class="form-input-styled"  name="image"  />
							
                            <span class="filename" >No file selected</span>
                            <span class="action btn bg-pink-400">Choose File</span>
                        </div>
                            <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
							<div><?php echo isset($error['image']) ? $error['image'] : ''; ?></div>
                    </div>
                    <div class="form-group">
                        <label>Description :</label>
                        <textarea class="form-control" name="description1" rows="1" cols="1"  ><?php echo isset($fetchRow['description1']) && !empty($fetchRow['description1']) ? $fetchRow['description1'] : ''; ?></textarea>
						<div><?php echo isset($error['description1']) ? $error['description1'] : ''; ?></div>
                    </div>
                    <div class="form-group">
                        <label>Brand :</label>
						<select name="brand" class="form-control">
							<option value="">Select Brand</option>
							
							<?php
								$brand="select * from brands";
								$brands = mysqli_query($conn , $brand);
								
								foreach($brands as $_r){ ?>
								
									<option value="<?php echo $_r['id'] ?>" <?php echo isset($fetchRow['brand']) &&$fetchRow['brand'] == $_r['id'] ? 'selected=""' : '';?>><?php echo $_r['brand_name']; ?></option>

								<?php
								}
							?>
							
							
						</select>
						<div><?php echo isset($error['brand']) ? $error['brand'] : ''; ?></div>
                    </div>
					 <div class="form-group">
                        <label>Categories :</label>
						<select name="categorie" class="form-control">
							<option value="">Select Categories</option>
							<?php 
								
								$categorie="select * from categories";
								$categories = mysqli_query($conn ,$categorie);
								
								foreach($categories as $_y) { ?>

									<option value="<?php echo $_y['id']; ?>" <?php echo isset($fetchRow['categorie']) &&$fetchRow['categorie'] == $_y['id'] ? 'selected=""' : '';?>><?php echo $_y['cate_name']; ?></option>
								<?php
								}
							?>
							
							
							
						</select>
						<div><?php echo isset($error['categorie']) ? $error['categorie'] : ''; ?></div>
                    </div>
					<div class="form-group">
                        <label>Price :</label>
                        <input type="text" class="form-control" name="price" value="<?php echo isset($fetchRow['price']) && !empty($fetchRow['price']) ? $fetchRow['price'] : ''; ?>">
						<div><?php echo isset($error['price']) ? $error['price'] : ''; ?></div>
                    </div>
					<div class="form-group">
                        <label>Description :</label>
                        <textarea class="form-control" name="description2" rows="1" cols="10"><?php echo isset($fetchRow['description2']) && !empty($fetchRow['description2']) ? $fetchRow['description2'] : ''; ?></textarea>
						<div><?php echo isset($error['description2']) ? $error['description2'] : ''; ?></div>
                    </div>






                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" name="add">Add Product <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>

            <!-- /basic layout -->
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>

