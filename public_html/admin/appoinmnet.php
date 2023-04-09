<?php 

include '../config.php';
include 'menu.php'; 

$data="SELECT * FROM appoinment ";

$result =mysqli_query($conn,$data);



?> 
<div class="content-wrapper">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <a  href="main.php"><h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Appoinmnet List</span> </a>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>


        </div>

        <!-- <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex"> -->
                <!-- <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="datatable_basic.html" class="breadcrumb-item">Datatables</a>
                    <span class="breadcrumb-item active">Basic</span>
                </div> -->

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>


    <!--     </div>
    </div> -->
    <div class="content">
       
		<div class="card">
            
          
         
					<div class="table-responsive">
						<table class="table datatable-basic">
							<tr>
								
								<td><b>ID</b></td>
								<td><b>NAME</b></td>
								<td><b>EMAIL</b></td>
								<td><b>CONTECT</b></td>
								<td><b>DATE & TIME</b></td>
								<td><b>SPCIA
										LIZED</b></td>
								<td><b>SYMPTOSM</b></td>
								<td><b>APPROVE</b></td>
								<td><b>REJECT</b></td>
								
							</tr>
							
							<?php  if (!$result) {
                              printf(mysql_error($conn));
                           }else{
                            while($rows=mysqli_fetch_array($result))
                            {
                           ?>
									<tr >
										
                               <td><?php echo $rows['id'];?></td>
							   <td><?php echo $rows['name'];?></td>
                               <td><?php echo $rows['email'];?></td>
                               <td><?php echo $rows['contect'];?></td>
                               <td><?php echo $rows['fdate'];?></td>
                               <td><?php echo $rows['select_id'];?></td>
                               <td><?php echo $rows['symptoms'];?></td>
                               <td><a href=""><button class="btn btn-primary">Approve</button></a></td>
							   <td><a href="appoinment_delete.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure to Reject and Delete?'); ">Reject</button></a></td>	
									</tr>
								
								<?php
                               }}
                            ?>
                            
                        
						</table>
					</div>
					
             
            
        
		</div>
	</div>
    <?php include 'footer.php'; ?>
