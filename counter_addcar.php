<?php
session_start();
include("connectdb.php");
$qr_user = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$_SESSION[user_id]'") or die("Database selection failed: " . mysqli_error($dbcon));
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

    <link rel="stylesheet" href="assets/libs/sweetalert2/sweetalert2.min.css">
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Plugins css -->
    <link href="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/libs/multiselect/multi-select.css" rel="stylesheet" type="text/css" />
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
    <script language=Javascript>
        function Inint_AJAX() {
            try {
                return new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {} //IE
            try {
                return new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {} //IE
            try {
                return new XMLHttpRequest();
            } catch (e) {} //Native Javascript
            alert("XMLHttpRequest not supported");
            return null;
        };

        function dochange(src, val) {
            var req = Inint_AJAX();
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    if (req.status == 200) {
                        document.getElementById(src).innerHTML = req.responseText; //รับค่ากลับมา
                    }
                }
            };
            req.open("GET", "locale_counter.php?data=" + src + "&val=" + val); //สร้าง connection
            req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
            req.send(null); //ส่งค่า
        }
        window.onLoad = dochange('province', -1);
    </script>

</head>
<?php
include("counter_topbar.php");
?>

<body>
    <!-- Begin page -->
    <?php
    include("counter_left_sidebar.php");
    ?>
    <div id="wrapper">

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-box">
                                    <h2>รายละเอียดรถ </h2><br>
                                    <div class="col-xl-10">

                                        <form name="form" id="form" method="post" class="form-horizontal" onsubmit="" role="form" data-parsley-validate novalidate>
                                            <div class="form-group row">
                                                <label for="hori-pass1" class="col-sm-2 col-form-label">ป้ายทะเบียนรถ</label>
                                                <div class="col-sm-4">
                                                    <input id="name" type="text" name="car_licenseplate" placeholder="กรอกป้ายทะเบียนรถ" required class="form-control">
                                                </div>
                                                <label for="hori-pass1" class="col-sm-2 col-form-label">ป้ายจังหวัด</label>
                                                <div class="col-sm-4">
                                                    <font id="province"><select class="form-control" name="car_provincialsign">
                                                            <option value="0">-เลือกจังหวัด</option>
                                                        </select></font>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hori-pass1" class="col-sm-2 col-form-label">ป้ายทะเบียนหาง</label>
                                                <div class="col-sm-4">
                                                    <input id="name" type="text" name="car_licenseplatetail" placeholder="( ถ้ามี ) " required class="form-control">
                                                </div>
                                                <label for="hori-pass1" class="col-sm-2 col-form-label">สถานะการตรวจ</label>
                                                <div>
                                                    <div class="col-sm-">
                                                        <input id="examination" type="radio" name="car_examination_status" value="0"> ผ่าน<br>
                                                        <input id="examination" type="radio" name="car_examination_status" value="1"> ไม่ผ่าน
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">ชื่อผู้ตรวจ</label>
                                                <div class="col-sm-10">
                                                    <input id="name" type="text" name="car_name_inspector" placeholder=" " required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">รายละเอียดการตรวจ</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" rows="5" id="example-textarea" placeholder="" name="car_examination_details"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hori-pass1" class="col-sm-2 col-form-label">วันที่ตรวจ</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" placeholder="วว/ดด/ปป.." data-date-format="yyyy-mm-dd" type="date" name="car_exmination_date" required class="form-control" value="">
                                                </div>
                                                <label for="hori-pass1" class="col-sm-2 col-form-label">ประเภทรถ</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="car_type">
                                                        <option value="0">- เลือกประเภทรถ -</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">บริษัทประกันภัย</label>
                                                <div class="col-sm-10">
                                                    <input id="name" type="text" name="car_insurance_company" placeholder=" " required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <?php
                                                $query = "SELECT * FROM admintype ";
                                                $result = mysqli_query($con, $query);
                                                ?>
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">บริษัทที่เป็นเจ้าของ</label>
                                                <div class="col-sm-7">
                                                    <select id="ad_id" name="ad_id" class="form-control">
                                                        <option value="">--เลือกบริษัท--</option>
                                                        <?php
                                                        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                                                            echo "<option value='$row[0]'> $row[2]</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="hori-pass" class="col-sm-2 col-form-label">วันที่ประกันหมดอายุ</label>
                                                <div class="col-sm-4">
                                                    <input  class="form-control" placeholder="วว/ดด/ปป.." data-date-format="yyyy-mm-dd" type="date" name="car_expiration_date" required class="form-control">
                                                </div>
                                                <label for="hori-pass1" class="col-sm-2 col-form-label">วันที่ภาษีหมดอายุ</label>
                                                <div class="col-sm-4">
                                                    <input  class="form-control" placeholder="วว/ดด/ปป.." data-date-format="yyyy-mm-dd" type="date" name="car_tax_expirationdate" required class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">ชื่อคนขับ</label>
                                                <div class="col-sm-10">
                                                    <input id="name" type="text" name="car_driver_name" placeholder=" " required class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group text-right mb-0">
                                                <button class="btn btn-success  waves-effect width-md waves-light" name="submit" type="submit">
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
    
    <div class="col-md-12 col-xs-12">

    </div>

    </div>

    <hr />


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


    <!-- Validation js (Parsleyjs) -->
    <script src="assets/libs/parsleyjs/parsley.min.js"></script>

    <!-- validation init -->
    <script src="assets/js/pages/form-validation.init.js"></script>

    <!-- Init js-->
    <script src="assets/js/pages/form-advanced.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

    <script>
        $(function() {
            $('form').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'counter_addcar_save.php',
                    data: $('form').serialize(),
                    success: function() {
                        swal(
                            'Success',
                            'บันทึกข้อมูลเรียบร้อย!',
                            'success'
                        ).then(function() {
                            window.location.href = 'counter_dashboard.php';
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>