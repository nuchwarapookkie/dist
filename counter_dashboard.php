<?php
session_start();
include_once "connectdb.php";
$qr_user =mysqli_query($con,"SELECT * from user where user_id = '$_SESSION[user_id]'") or die("Database selection failed: " . mysqli_error($dbcon));
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



          <!--Morris Chart-->
          <link rel="stylesheet" href="assets/libs/morris-js/morris.css" />
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
           
            <div class="content-page">
                <div class="content">

                     <!-- Start Content-->
                     <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">รถที่ลงทะเบียนในระบบ</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <span class="badge badge-primary badge-pill float-left mt-3"><i class="fas fa-truck-moving fa-3x"></i> </span>
                                            <h2 class="font-weight-normal mb-1"> <?php echo $num1 ?> </h2>
                                            <p class="text-muted mb-3">คัน</p>
                                        </div>
                                        
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">ประเภทของรายการตรวจ</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <span class="badge badge-pink badge-pill float-left mt-3"><i class="fas fa-list-alt fa-3x"></i> </span>
                                            <h2 class="font-weight-normal mb-1"> <?php echo $num13 ?> </h2>
                                            <p class="text-muted mb-3">ประเภท</p>
                                        </div>
                                        
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">จำนวนรถที่ตรวจวันนี้</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <span class="badge badge-success badge-pill float-left mt-3"><i class="fas fa-car fa-3x"></i> </span>
                                            <h2 class="font-weight-normal mb-1"> <?php echo $num2  ?></h2>
                                            <p class="text-muted mb-3">คัน</p>
                                        </div>
                                        
                                    </div>
                                </div>
        
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <h4 class="header-title mt-0 mb-3">จำนวนรถที่ตรวจเดือนนี้</h4>

                                    <div class="widget-box-2">
                                        <div class="widget-detail-2 text-right">
                                            <span class="badge badge-purple badge-pill float-left mt-3"><i class="fas fa-calendar-check fa-3x"></i> </span>
                                            <h2 class="font-weight-normal mb-1"> <?php echo  $num3 ?> </h2>
                                            <p class="text-muted mb-3">คัน</p>
                                        </div>
                                        
                                    </div>
                                </div>
        
                            </div><!-- end col -->
                        </div>


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-box">
                                    

                                    <h4 class="header-title mt-0">สถานะของรถที่ตรวจวันนี้</h4>

                                    <div class="widget-chart text-center">
                                        <div id="morris-donut-example" dir="ltr" style="height: 245px;" class="morris-chart"></div>
                                        <ul class="list-inline chart-detail-list mb-0">
                                            <li class="list-inline-item">
                                                <h5 style="color: #4DFA90;"><i class="fa fa-circle mr-1"></i>ผ่าน</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #FF5468;"><i class="fa fa-circle mr-1"></i>ไม่ผ่าน</h5>
                                            </li>
                                            <li class="list-inline-item">
                                                <h5 style="color: #FABE4D;"><i class="fa fa-circle mr-1"></i>ผ่านแต่มีแก้ไข</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="card-box">
                                    
                                    <h4 class="header-title mt-0">จำนวนรถที่ตรวจในแต่ละเดือน</h4>
                                    <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                                </div>
                            </div><!-- end col -->

                            

                        </div>
                        <!-- end row -->

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
            <?php
        require("counter_left_sidebar.php");
        ?>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <script src="assets/js/vendor.min.js"></script>

<!-- knob plugin -->
<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

<!--Morris Chart-->
<script src="assets/libs/morris-js/morris.min.js"></script>
<script src="assets/libs/raphael/raphael.min.js"></script>

<!-- Dashboard init js-->
<script>

!function($) {
    "use strict";

    var Dashboard1 = function() {
    	this.$realData = []
    };
    // Bar chart
    Dashboard1.prototype.createBarChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#323a46',
            barSizeRatio: 0.2,
            gridTextColor: '#98a6ad',
            barColors: lineColors
        });
    },
    //สถานะของรถที่ตรวจวันนี้ font
    Dashboard1.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true, //defaulted to true
            colors: colors,
            backgroundColor: '#323a46',
            labelColor: '#fff'
        });
    },
    
    
    Dashboard1.prototype.init = function() {
         //รถรายเดือน
         var $barData  = [
            { y: 'กันยายน', a: <?php echo $num9 ?> },
            { y: 'ตุลาคม', a: <?php echo $num10 ?> },
            { y: 'พฤศจิกายน', a: <?php echo $num11 ?> },
            { y: 'ธันวาคม', a: <?php echo $num12 ?> },
            { y: 'มกราคม', a: 0 },
            { y: 'กุมภาพันธ์', a: 0}
        ];
        this.createBarChart('morris-bar-example', $barData, 'y', ['a'], ['จำนวนรถ'], ['#188ae2']);
        //สถานะของรถที่ตรวจวันนี้
        var $donutData = [
                {label: "ผ่าน", value: <?php echo $num4 ?>},
                {label: "ไม่ผ่าน", value: <?php echo $num5 ?>},
                {label: "ผ่านแต่มีแก้ไข", value: <?php echo $num6 ?>}
            ];
        this.createDonutChart('morris-donut-example', $donutData, ['#4DFA90', '#FF5468', "#FABE4D"]);
    },
    //init
    $.Dashboard1 = new Dashboard1, $.Dashboard1.Constructor = Dashboard1
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.Dashboard1.init();
}(window.jQuery);




</script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>
        
    </body>
</html>