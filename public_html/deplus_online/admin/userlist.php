<?php

include '../config.php';
include 'menu.php'; 



$sql = "select * from user_data";
$result=$conn->query($sql);
?>

<div class="content-wrapper">
	 <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">User List</span> 
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
							$rs=$result->fetch_all(MYSQLI_ASSOC);
							?>
							
						<div class="table-responsive">
							<table class="table datatable-basic">
							
								<tr>
									<td>Name</td>
									<td>Email</td>
									<td>Address</td>
									<td>City</td>
									<td>Mobile No.</td>
								
									
								</tr>
								
								<?php
									
									foreach($rs as $_x){ ?>
									
										<tr class="brand_hover">
											<td><?php echo $_x['first_name'];  ?> <?php echo $_x['last_name'];  ?></td>
											<td><?php echo $_x['email']; ?></td>
											<td><?php echo $_x['address']; ?></td>
											<td><?php echo $_x['city']; ?></td>
											<td><?php echo $_x['mobile_no']; ?></td>
											
											
										</tr>
									
									<?php } ?>
								
							</table>
						</div>	
							
							
					<?php } ?>
			</div>
		</div>
	</div>	

</div>