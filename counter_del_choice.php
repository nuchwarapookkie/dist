<?php
include("connectdb.php");
date_default_timezone_set('Asia/Bangkok');
$con->set_charset("utf8");

$a1 = $_GET['num'];
$form_id = $_GET['fid'];
$datetime = date("Y-m-d H:i:s");

$query = "DELETE FROM car_form_choice WHERE num = '$a1'";
$objQuery = mysqli_query($con,$query) or die("Database selection failed 3: " . mysqli_error($con));

if($objQuery)
{
    $show = "<script> window.location='counter_edform.php?fid=$form_id'</script>";
}
else
{
    $show = "Error Save [".$strSQL2."]";
}
echo $show;

?>