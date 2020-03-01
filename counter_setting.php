<?php
include("connectdb.php");
session_start();
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <title>ระบบจัดการขนส่งทางรถบรรทุก</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ระบบจัดการขนส่งทางรถบรรทุก" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Morris Chart-->
    <link rel="stylesheet" href="assets/libs/morris-js/morris.css" />

    <!-- dropify -->
    <link href="assets/libs/dropify/dropify.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

</head>
<?php
include("counter_topbar.php");
?>

<body class="authentication-bg">


    <!-- Begin page -->
    <div id="wrapper">
        <?php
        include("counter_left_sidebar.php");
        ?>

        <?php

        $query = "SELECT * FROM user WHERE user_id = '" . $_SESSION['user_id'] . "' ";
        $res = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($res)) {
        ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">

                                    <h1>ตั้งค่าข้อมูลส่วนตัว</h1>

                                    <div class="col-xl-12">
                                        <div class="card-box">
                                            <form class="form-horizontal" role="form" data-parsley-validate novalidate>

                                                <div class="float-left mr-2">
                                                    <div class="form-group row">

                                                        <img src="assets/images/users/<?php echo $row["image"]; ?>" width="250" height="250" class="w3-circle w3-hover-opacity ">

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">ชื่อ - นามสกุล</label>
                                                    <div class="col-sm-4 col-form-label">
                                                        <?php echo $row["user_name"]; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">บริษัทที่สังกัด</label>
                                                    <div class="col-sm-4 col-form-label">
                                                        <?php echo $row["ad_id"]; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">แผนก</label>
                                                    <div class="col-sm-4 col-form-label">
                                                        <?php echo $row["ut_id"]; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Username</label>
                                                    <div class="col-sm-4 col-form-label">
                                                        <?php echo $row["user_username"]; ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Password</label>
                                                    <div class="col-sm-4 col-form-label">
                                                        <?php echo $row["user_password"]; ?>
                                                    </div>
                                                </div>
                                                <br>



                                                <div class="float-right">
                                                    <a href="counter_editprofile.php?id=<?php echo $row["user_id"]; ?>" class="btn btn-warning btn-rounded width-lg waves-effect waves-light "><span>แก้ไข </span></a>
                                                </div>

                                        </div>

                                        </form>
                                    </div>
                                    <!-- END wrapper -->



                                    <!-- Vendor js -->
                                    <script src="assets/js/vendor.min.js"></script>

                                    <!-- knob plugin -->
                                    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

                                    <!--Morris Chart-->
                                    <script src="assets/libs/morris-js/morris.min.js"></script>
                                    <script src="assets/libs/raphael/raphael.min.js"></script>

                                    <!-- Dashboard init js-->
                                    <script src="assets/js/pages/dashboard.init.js"></script>

                                    <!-- dropify js -->
                                    <script src="assets/libs/dropify/dropify.min.js"></script>

                                    <!-- form-upload init -->
                                    <script src="assets/js/pages/form-fileupload.init.js"></script>

                                    <!-- App js -->
                                    <script src="assets/js/app.min.js"></script>
                                <?php
                            }
                                ?>

</body>

</html>