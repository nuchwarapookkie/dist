<?php
session_start();
include("connectdb.php");

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

    <!-- third party css -->
    <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->


    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>
<?php
include("counter_topbar.php");
?>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        <?php
        include("counter_left_sidebar.php");
        ?>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-xl-12 col-md-12">
                            <div class="card-box">

                                <h2 class="">รถในระบบทั้งหมด</h2>
                                <h4>รายการ</h4>
                                <hr/>
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ทะเบียน</th>
                                            <th>จังหวัด</th>
                                            <th>ชื่อบริษัท</th>
                                            <th>ประเภท</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        echo $_GET['ad_id'];
                                        $sqli = "SELECT  car_detail.car_dt_id ,car_detail.car_licenseplate , car_detail.car_provincialsign ,car_detail.ad_id ,car_detail.car_type ,province.id , province.name_th ,admintype.ad_id , admintype.ad_name FROM car_detail
                                        INNER JOIN province ON  car_detail.car_provincialsign = province.id 
                                        INNER JOIN admintype ON  car_detail.ad_id = admintype.ad_id
                                        WHERE  car_detail.ad_id ='$_SESSION[ad_id]'";

                                        $query = mysqli_query($con, $sqli) or die("Database selection failed: " . mysqli_error($con));
                                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                            $ad_id=$result['ad_id'];
                                        ?>
                                            <tr>
                                                <td><?php echo $result['car_licenseplate'] ?></td>
                                                <td><?php echo $result['name_th'] ?></td>
                                                <td><?php echo $result['ad_name'] ?></td>
                                                <td><?php echo $result['car_type'] ?></td>
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <a href="admin_company_ed.php?ad_id=<?php echo $car_dt_id ?>" class="btn btn-warning waves-effect">แก้ไข
                                                        </a>
                                                        <a class="btn btn-danger waves-effect" href="JavaScript:if(confirm('ต้องการลบ ใช่หรือไม่?')==true){window.location='counter_car_del.php?cid=<?php echo 'car_detail.car_dt_id' ?>';}">ลบ</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?PHP
                                        }
                                        ?>

                                    </tbody>
                                </table>





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

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- third party js -->
    <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
    <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
    <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables/buttons.flash.min.js"></script>
    <script src="assets/libs/datatables/buttons.print.min.js"></script>
    <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/libs/datatables/dataTables.select.min.js"></script>
    <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="assets/js/pages/datatables.init.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>


</body>

</html>