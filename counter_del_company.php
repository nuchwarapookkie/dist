<?php
include("connectdb.php");
date_default_timezone_set('Asia/Bangkok');
$con->set_charset("utf8");

$cid = $_GET['cid'];
$datetime = date("Y-m-d H:i:s");
$tables = array("company","car_data");

    $query = "DELETE FROM company WHERE user_id = '$cid'";
    $objQuery = mysqli_query($con, $query) or die("Database selection failed 3: " . mysqli_error($con));

$query2 = "DELETE FROM car_data WHERE company_id = '$cid'";
$objQuery2 = mysqli_query($con, $query2) or die("Database selection failed 3: " . mysqli_error($con));

    if ($objQuery) {
        $show = "<script> window.location='counter_allcompany.php'</script>";
    } else {
        $show = "Error Save [" . $strSQL2 . "]";
    }
    echo $show;

?>