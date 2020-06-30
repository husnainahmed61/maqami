<!DOCTYPE html>
<html lang="en">
<head>

    <!-- head scripts -->
    <?php include('includes/head-styles.php'); ?>


</head>

    <body class="sidebar-mini">
        
        
        <!-- Site wrapper -->
        <div class="wrapper">

            <!-- header -->
            <?php include('includes/header.php');  ?>
            

            <!-- header -->
            <?php include('includes/sidebar.php'); ?>


            <!-- Manage Customer -->
            <div class="content-wrapper" style="min-height: 448px;">

                <!-- Page Title -->
                <section class="content-header">
                    <div class="header-icon">
                        <i class="pe-7s-note2"></i>
                    </div>
                    <div class="header-title">
                        <h1>Add Category</h1>
                        <!-- <small class="">Manage your credit customer</small> -->
                        <ol class="breadcrumb">
                            <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                            <li><a href="#">Settings</a></li>
                            <li class="active">Change Password</li>
                        </ol>
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <?php echo $this->session->flashdata('message'); ?>
                        <div class="col-sm-12">
                            <!--add supplier category-->
                            <div class="panel panel-bd lobidrag invent-main">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Change Admin Password</h4>
                                    </div>
                                </div>
                                
                                <!-- form here -->

                                <div class="panel-body addit">
                                    <form action="<?=base_url()?>Admin/change_admin_pass" method="post" accept-charset="utf-8">
                                      

                                        <div class="row">
                                            <div class="col-sm-6">
                                               <div class="form-group row">
                                                    <label for="expire_date" class="col-sm-3 col-form-label">Current Password 
                                                        <i class="text-danger">*</i>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" id="category_name" name="current_pass" type="text" required>
                                                        <input name="admin_account" type="hidden" value="admin">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                               <div class="form-group row">
                                                    <label for="expire_date" class="col-sm-3 col-form-label">New Password 
                                                        <i class="text-danger">*</i>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" id="category_name" name="new_pass" type="text" required>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input type="submit" value="Change" class="btn btn-large btn-success">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                

                            </div>
                            <div class="panel panel-bd lobidrag invent-main">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Change Sale Account Password</h4>
                                    </div>
                                </div>
                                
                                <!-- form here -->

                                <div class="panel-body addit">
                                    <form action="<?=base_url()?>Admin/change_admin_pass" method="post" accept-charset="utf-8">
                                      

                                        <div class="row">
                                            <div class="col-sm-6">
                                               <div class="form-group row">
                                                    <label for="expire_date" class="col-sm-3 col-form-label">Current Password 
                                                        <i class="text-danger">*</i>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" id="category_name" name="current_pass" type="text" required>
                                                        <input name="sale_account" type="hidden" value="sale">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                               <div class="form-group row">
                                                    <label for="expire_date" class="col-sm-3 col-form-label">New Password 
                                                        <i class="text-danger">*</i>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" id="category_name" name="new_pass" type="text" required>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input type="submit" value="Change" class="btn btn-large btn-success">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                

                            </div>
                            <div class="panel panel-bd lobidrag invent-main">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <h4>Change Purchase Account Password</h4>
                                    </div>
                                </div>
                                
                                <!-- form here -->

                                <div class="panel-body addit">
                                    <form action="<?=base_url()?>Admin/change_admin_pass" method="post" accept-charset="utf-8">
                                      

                                        <div class="row">
                                            <div class="col-sm-6">
                                               <div class="form-group row">
                                                    <label for="expire_date" class="col-sm-3 col-form-label">Current Password 
                                                        <i class="text-danger">*</i>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" id="category_name" name="current_pass" type="text" required>
                                                        <input name="purchase_account" type="hidden" value="purchase">
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-sm-6">
                                               <div class="form-group row">
                                                    <label for="expire_date" class="col-sm-3 col-form-label">New Password 
                                                        <i class="text-danger">*</i>
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" id="category_name" name="new_pass" type="text" required>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <input type="submit" value="Change" class="btn btn-large btn-success">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                

                            </div>
                            
                        </div>
                    </div>
                </section>
            </div>
           
 

            <!-- footer -->
            <?php include('includes/footer.php'); ?>
                 
        </div>
        <!-- ./wrapper -->

    
        <!-- jquery-ui --> 
        <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- height manager -->
        <script src="assets/js/frame.min.js" type="text/javascript"></script>
    

</body>
</html>