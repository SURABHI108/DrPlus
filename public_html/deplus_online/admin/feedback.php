<?php 

include '../config.php';
include 'menu.php'; 

$data="SELECT * FROM contect_us ";

$result =mysqli_query($conn,$data);


?>

<script>
   function myFunction() {
     alert("You are sure to Delete Record!");
   }


                // $('#table_id').DataTable( {
                //     responsive: true
                // } );
</script>

<div class="content-wrapper" >
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <a  href="main.php"><h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Contact </span> </h4></a>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            
        </div>

        <!-- <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="datatable_basic.html" class="breadcrumb-item">Datatables</a>
                    <span class="breadcrumb-item active">Basic</span>
                </div>-->
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

          
     <!--    </div>
    </div> -->
    <div class="content">
        <div class="card">
			
            <div class=" mt-2">
                <div class="row">
                    <div class="col-md-12">
                        
                        <table class="table" id="table_id">
                         
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NAME</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">SUBJECT</th>
                              <th scope="col">MESSAGE</th>
                              <!-- <th scope="col">UPDATE</th -->
                              <th scope="col">DELETE</th>
                            </tr>
                          
                           <?php  if (!$result) {
                              printf(mysql_error($conn));
                           }else{
                            while($rows=mysqli_fetch_array($result))
                            {
                           ?>
                           <tr>
                               <td><?php echo $rows['id'];?></td>
                               <td><?php echo $rows['name'];?></td>
                               <td><?php echo $rows['email'];?></td>
                               <td><?php echo $rows['subject'];?></td>
                               <td><?php echo $rows['message'];?></td>
                               
                             <!--   <td><a href=""><a href="feedback_updaate.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-primary" ><i class="bi bi-pencil-square"></i></button></a></td> -->
                               <td><a href=""><a href="feedback_delete.php?id=<?php echo $rows['id']; ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure to delete?'); "><i class="bi bi-trash-fill"></i></button></a></td>
                               
                           </tr>
                           <?php
                               }}
                            ?>
                            
                              
                              
                           
                        
                        </table>
   <!--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
       <script>

         
                $('#table_id').DataTable( {
                    responsive: true
                } );
         
      </script>  -->
                    </div>
                </div>        
            </div>

		</div>
</div>	<?php include 'footer.php'; ?>
	</div>