<?php 

include '../config.php';
include 'menu.php';

if(isset($_GET['id']) && !empty($_GET['mode']) == 'delete'){
	
	$filename = '';

	$sql ="DELETE from product where id=". $_GET['id'];
	$result=$conn->query($sql);
	
}	

$sql="select `product`.*, cate_name, brand_name FROM product LEFT JOIN categories ON product.categorie = categories.id 
LEFT JOIN brands ON product.brand = brands.id ";

$result=$conn->query($sql);

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
        
        <div class="card">
           

            <div class="card-body">
	
				<?php
					if($result->num_rows > 0){
						$rs = $result->fetch_all(MYSQLI_ASSOC);
				?>
			<div class="table-responsive">
				<table class="table datatable-basic">
					<tr>
						<td>Id</td>
						<td>Product Title</td>
						<td>Product Image</td>
						<td>Description</td>
						<td>Brand</td>
						<td>Categories</td>
						<td>Price</td>
						<td>Description</td>
						<td>Edit/Delete</td>
					</tr>
					<?php $i=1;
						foreach($rs as $_y) { ?>
						
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $_y['product_title']; ?></td>
							<td> <?php if(isset($_y['image']) && !empty($_y['image'])) { ?>
							<img src="../upload/<?php echo $_y['image']; ?> " class="img-thumbnail" />  
							<?php } ?></td>	
							<td><?php echo $_y['description1']; ?></td>
							<td><?php echo $_y['brand_name']; ?></td>
							<td><?php echo $_y['cate_name']; ?></td>
							<td><?php echo $_y['price']; ?></td>
							<td><?php echo $_y['description2']; ?></td>
							
							<td>
								<a href="addproduct.php?id=<?php echo $_y['id']; ?>&mode=edit">Edit</a>
								<a href="productdetails.php?id=<?php echo $_y['id']; ?>&mode=delete" onclick="return confirm('Are you sure to delete?'); ">Delete</a>

							</td>
						</tr>
						
						<?php $i++; } ?>
				</table>
			</div>	
				<?php } ?>
			</div>
		</div>
	</div>
</div>
