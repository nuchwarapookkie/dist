<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    session_start();
    include("connectdb.php");
    date_default_timezone_set('Asia/Bangkok');
    $datetime = date("Y-m-d H:i:s");
    $con->set_charset("utf8");

    $strSQL2 = "UPDATE car_dt_id SET car_licenseplate = '$_POST[car_licenseplate]',
        car_provincialsign = '$_POST[car_provincialsign]',
        car_licenseplatetail = '$_POST[car_licenseplatetail]',
        car_examination_status = '$_POST[car_examination_status]',
        car_name_inspector = '$_POST[car_name_inspector]',
        car_examination_details = '$_POST[car_examination_details]',
        car_examination_date = '$_POST[car_examination_date]',
        car_type = '$_POST[car_type]',
        car_expiration_date = '$_POST[car_expiration_date]',
        car_tax_expirationdate = '$_POST[car_tax_expirationdate]',
        car_driver_name = '$_POST[car_driver_name]',
        ut_id = '$_POST[ut_id]',
        WHERE ad_id = '$_POST[ad_id]'";

    $objQuery = mysqli_query($con, $strSQL2) or die("Database selection failed: " . mysqli_error($con));

    ?>
</body>

</html>