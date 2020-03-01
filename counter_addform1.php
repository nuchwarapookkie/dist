<?php
session_start();
include("connectdb.php");
$qr_user =mysqli_query($con,"SELECT * FROM user WHERE user_id = '$_SESSION[user_id]'") or die("Database selection failed: " . mysqli_error($dbcon));
$re_user = mysqli_fetch_array($qr_user);
?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="utf-8" />
        <title>e-Checklist | Powered by ID Drives</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="e-Checklist" name="description" />
        <meta content="ID Drives" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">


        <!-- Plugins css -->
        <link href="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/libs/multiselect/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets/libs/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
        <link href="assets/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>
    <?php
    require("counter_topbar.php");
    ?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
            $fid = $_GET['fid'];
            $fj = $_GET['fj'];
            ?>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                            <div class="row">

                                    <div class="col-xl-12 col-md-12">
                                        <div class="card-box">
                                            
                                            <h2 class="">เพิ่มฟอร์มตรวจ</h2>
                                            <h4>เพิ่มรายการตรวจสอบ</h4>
                                            <span>****เพิ่มแล้วให้กดบันทึก****</span>
                                            
                                            <hr/>
         
                                            <div class="col-xl-12 col-md-12">
                                                   <form action="counter_addform_save_choice1.php?type=new" method="post">
                                                       <input class="form-control" type="hidden" id="fid" name="fid" value="<?php echo $fid ?>">
                                                            <input type="text" id="todo-txttb" class="form-control todo-txttb" name="choice_form" placeholder="เพิ่มหัวข้อตรวจ">
                                                            <input type="hidden" id="todo-txttb" class="form-control todo-txttb" name="fj" value="<?php echo $fj ?>">
                                                       <button type="submit" class="btn btn-success  waves-effect width-md waves-light" id="sa-confirm-pass">บันทึก</button>
                                                   </form>
                                            <hr/>
                                                    <div class="col-md-12 text-right button-list"></div>
                                                </div>
                    
                                            </div>
        
                                            <div class="row">
                                               
                                            </div>
                                            
                                        </div>
        
                                    </div><!-- end col -->
        
                                    
        
                                </div>
                                <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                               2019 &copy; Powered by <a href="#">ID Drives</a> 
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <div class="rightbar-overlay"></div>
        <?php
        require("counter_left_sidebar.php");
        ?>
       <!-- Vendor js -->
       <script src="assets/js/vendor.min.js"></script>

       <!-- Plugins Js -->
       <script src="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
       <script src="assets/libs/switchery/switchery.min.js"></script>
       <script src="assets/libs/multiselect/jquery.multi-select.js"></script>
       <script src="assets/libs/jquery-quicksearch/jquery.quicksearch.min.js"></script>

       <script src="assets/libs/select2/select2.min.js"></script>
       <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
       <script src="assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
       <script src="assets/libs/moment/moment.js"></script>
       <script src="assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
       <script src="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
       <script src="assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
       <script src="assets/libs/bootstrap-daterangepicker/daterangepicker.js"></script>
       <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

       <!-- Init js-->
       <script src="assets/js/pages/form-advanced.init.js"></script>

       <!-- App js -->
       <script src="assets/js/app.min.js"></script>
       
       
        
    </body>
</html>