<?php 

include '../config.php';
include 'menu.php'; 


if(isset($_GET['id']) && $_GET['mode'] == 'delete') {

	$sql ="DELETE from brands where id=".$_GET['id'];
	$result=$conn->query($sql);


}	

$sql="select * from brands";
$result=$conn->query($sql);

?>

	
<div class="content-wrapper" >
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Brand Master </span> </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="addbrand.php" class="btn btn-link btn-float text-default"><i class="fas fa-plus-square"></i><span>Add Brand</span></a>
                   
                </div>
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
            

			
            <?php
				if($result->num_rows > 0) {
					$rs = $result->fetch_all(MYSQLI_ASSOC);
			?>

            <table class="table datatable-basic">
                
                    <tr>
                        <td><b>Id</b></td>
                        <td><b>Brand Name</b></td>
						<td><b>Edit/Delete</b></td>
                       
                        
                    </tr>
               
				
				<?php $i=1;
					foreach($rs as $_y) {
				?>
               
					<tr class="colhover">
						<td><?php echo $i; ?></td>
						<td><?php echo $_y['brand_name']; ?></td>
						<td>
							<a href="addbrand.php?id=<?php echo $_y['id'];?>&mode=edit"style="color:#0a6088;">Edit</a>
							<a href="brandmaster.php?id=<?php echo $_y['id'];?>&mode=delete" style="color:red;" onclick="return confirm('Are you sure to delete?');">Delete</a>
                    
						</td>
						
					</tr>
                    
                    
              
					<?php $i++; } ?>
            </table>
				<?php } ?>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>

   
