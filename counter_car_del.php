<?php
include("connectdb.php");
date_default_timezone_set('Asia/Bangkok');
$con->set_charset("utf8");

// 'car_detail.car_dt_id' = 'car_detail.car_dt_id' ;
$datetime = date("Y-m-d H:i:s");
$tables = array("car_detail","car_data");

    $query = "DELETE FROM car_detail WHERE car_detail.car_dt_id = car_detail.car_dt_id";
    $objQuery = mysqli_query($con, $query) or die("Database selection failed 3: " . mysqli_error($con));


    if ($objQuery) {
        $show = "<script> window.location='counter_allcar.php'</script>";
    } else {
        $show = "Error Save [" . $strSQL2 . "]";
    }
    echo $show;

?>