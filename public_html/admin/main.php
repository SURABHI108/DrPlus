<?php 

include_once '../config.php';
include 'menu.php';

$sql="select * from user_data";
$result=$conn->query($sql);

?>
	
<div class="content-wrapper">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <a  href="main.php"> <h4><i class="fas fa-home"></i> <span class="font-weight-semibold"> Dashboard</span> </h4></a>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            
        </div>

        <!-- <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="main.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="datatable_basic.html" class="breadcrumb-item">Datatables</a>
                    <span class="breadcrumb-item active">Basic</span>
                </div> -->

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            
     <!--    </div>
    </div> -->
    <div class="content">
        <div class="card">
            
           

            <?php
				if($result->num_rows > 0) {
					$rs=$result->fetch_all(MYSQLI_ASSOC);
			?>
            <table class="table datatable-basic">
            <tr>
                
                <td>First Name</td>             
                <td>Email</td>
                <td>Address</td>
                <td>City</td>
                <td>Mobile No</td>
            </tr>
            
            <?php $i=1;
                     foreach ($rs as $_rr) { ?>
                     
            <tr class="colhover">
            <td><?php echo $_rr['first_name']; ?> <?php echo $_rr['last_name']; ?></td>          
            <td><?php echo $_rr['email']; ?></td>
            <td><?php echo $_rr['address']; ?></td>
            <td><?php echo $_rr['city']; ?></td>
            <td><?php echo $_rr['mobile_no']; ?></td>
			</tr>
            
                     <?php $i++; }
            ?>
        </table>
        
        <?Php }
        
        ?>
            
            
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>  