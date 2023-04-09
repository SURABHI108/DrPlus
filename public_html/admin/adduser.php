<?php include 'menu.php'; ?>

<div class="content-wrapper">
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Add user</span> 
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
                <div class="card-header header-elements-inline justify-content-end">
                    
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="form-group">
                            <label>First Name :</label>
                            <input type="text" class="form-control" name="fname" value="">
                        </div>
                        <div class="form-group">
                            <label>Last Name :</label>
                            <input type="text" class="form-control" name="lname" value="">
                        </div>

                        <div class="form-group">
                            <label>Email :</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label>Password :</label>
                            <input type="password" class="form-control" name="password" value="">
                        </div>
                        <div class="form-group">
                            <label>Phone Number :</label>
                            <input type="text" class="form-control" name="number" value="">
                        </div>
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" class="form-control" name="address" value="">
                        </div>

                        <div class="form-group">
                            <label for="city">City : </label>
                            <input type="text" class="form-control" name="city" value="">
                        </div>






                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
           
            <!-- /basic layout -->
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>

