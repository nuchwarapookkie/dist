counter_addform1.php
<?php
include("connectdb.php");
include("random_id_2.php");
date_default_timezone_set('Asia/Bangkok');
$con->set_charset("utf8");

$random = getToken2(8);
$a1 = $_POST['fid'];
$form_name = $_POST['car_form_name'];
$datetime = date("Y-m-d H:i:s");

$sql = "INSERT INTO car_form (form_id, form_name, date_insert)  VALUES ('$a1' ,'$form_name', '$datetime')";
$objQuery = mysqli_query($con,$sql) or die("Database selection failed: " . mysqli_error($con));

if($objQuery)
{
    $show = "<script> window.location='counter_addform1.php?fid=$a1&fj=$random';</script>";
}
else
{
    $show = "Error Save [".$sql."]";
}
echo $show;

?>