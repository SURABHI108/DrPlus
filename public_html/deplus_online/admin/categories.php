<?php 
include '../config.php';
include 'menu.php'; 

	if(isset($_GET['id']) && $_GET['mode'] == 'delete') {

	$sql ="DELETE from categories where id=".$_GET['id'];
	$result=$conn->query($sql);


}	

$sql="select * from categories";
$result=$conn->query($sql);


?> 
<div class="content-wrapper">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
               <a  href="main.php"> <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Doctor Categories List</span> </a>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
			<div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="addcategories.php" class="btn btn-link btn-float text-default"><i class="fas fa-plus-square"></i><span>Add Categories</span></a>
                   
                </div>
            </div>

           
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

         
        </div>
    </div> -->
    <div class="content">
        <div class="card">
        	<?php 
			
				if($result->num_rows > 0){
					$rs = $result->fetch_all(MYSQLI_ASSOC);
			
			?>
			
            <div class=" mt-2">
                <div class="row">
                    <div class="col-md-12">
                        
                        <table class="table">
                         
                            <tr>
                               <td><b>ID</b></td>
		                        <td><b>CATAGORY</b></td>
		                       <td><b>EDIT</b></td>
		                       <td><b>DELETE</b></td>
                            </tr>
                          
                           <?php $i=1;
					
						foreach($rs as $_y){ ?>
						
						<tr class="colhover">
							<td><?php echo $i; ?></td>
							<td><?php echo $_y['cate_name']; ?></td>
							
							<td>
							
								<a href="addcategories.php? id=<?php echo $_y['id']; ?>&mode=edit" style="color:#0a6088;" ><button class="btn btn-primary"><i class="far fa-edit"></i></button></a> 

							</td>
							<td>
								<a href="categories.php?id=<?php echo $_y['id']; ?>&mode=delete" style="color:red;" onclick="return confirm('Are you sure to delete?'); "><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>
								
							</td>
						</tr>
                            
                         <?php $i++; } ?>     
                              
                           
                        
                        </table>
                        <?php } ?>
                    </div>
                </div>        
            </div>

		</div>
	</div>




    <?php include 'footer.php'; ?>
    </div>
</div>    