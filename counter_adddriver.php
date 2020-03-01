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
    <title>ระบบจัดการขนส่งทางรถบรรทุก</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ระบบจัดการขนส่งทางรถบรรทุก" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Morris Chart-->
    <link rel="stylesheet" href="assets/libs/morris-js/morris.css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

     <!-- App favicon -->
     <link rel="shortcut icon" href="assets/images/favicon.ico">

     <!-- Sweet Alert-->
     <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
           
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">                            
                    <div class="col-md-12" >
                        <div class="card">
                            <div class="card-box">
                                <h2>ข้อมูลพนักงานขับรถ </h2><br>
                                <div class="col-xl-10">
                                <div class="card-box">
                                <form class="form-horizontal" role="form" >
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">ชื่อ - นามสกุล</label>
                                            <div class="col-sm-9">
                                                <input id="name" type="text" name="ad_name" placeholder=" "required class="form-control">
                                            </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="hori-pass1" class="col-sm-2 col-form-label">แผนก</label>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="admin_zone">
                                                    <option value="0">- เลือกแผนก -</option>
                                                    <option>1</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">บริษัทที่สังกัด</label>
                                            <div class="col-sm-9">
                                                <input id="name" type="text" name="ad_name" placeholder=" "required class="form-control">
                                            </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">กลุ่มบริษัท</label>
                                            <div class="col-sm-9">
                                                <input id="name" type="text" name="ad_name" placeholder=" "required class="form-control">
                                            </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">หมายเลขโทรศัพท์</label>
                                            <div class="col-sm-9">
                                                <input id="name" type="text" name="ad_name" placeholder=" "required class="form-control">
                                            </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input id="name" type="text" name="ad_name" placeholder=" "required class="form-control">
                                            </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input id="name" type="text" name="ad_name" placeholder=" "required class="form-control">
                                            </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Line ID</label>
                                            <div class="col-sm-9">
                                                <input id="name" type="text" name="ad_name" placeholder=" "required class="form-control">
                                            </div> 
                                    </div>
                                    <div class="form-group text-right mb-0">
                                        <a href="counter_edform.php?fid=<?php echo $result['form_id']; ?>"
                                            class="btn btn-warning waves-effect">แก้ไข
                                        </a>
                                        <button class="btn btn-success  waves-effect width-md waves-light" name="submit"  type="submit">
                                        บันทึก
                                        </button>
                                    </div>
                                </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    </div>
<?php 
require("counter_left_sidebar.php");
?>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- knob plugin -->
    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!--Morris Chart-->
    <script src="assets/libs/morris-js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init js-->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

     <!-- Vendor js -->
     <script src="assets/js/vendor.min.js"></script>

     <!-- Sweet Alerts js -->
     <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

     <!-- Sweet alert init js-->
     <script src="assets/js/pages/sweet-alerts.init.js"></script>


     <!-- App js -->
     <script src="assets/js/app.min.js"></script>

</body>

</html>