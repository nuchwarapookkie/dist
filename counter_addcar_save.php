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


    $sql2 = "INSERT INTO car_detail(car_licenseplate, car_provincialsign, car_licenseplatetail ,car_examination_status,car_name_inspector,
car_examination_details,car_examination_date,car_type,car_insurance_company,car_expiration_date,car_tax_expirationdate,
car_driver_name,ut_id,ad_id)  VALUES
('$_POST[car_licenseplate]','$_POST[car_provincialsign]','$_POST[car_licenseplatetail]','$_POST[car_examination_status]','$_POST[car_name_inspector]',
    '$_POST[car_examination_details]','$_POST[car_examination_date]','$_POST[car_type]','$_POST[car_insurance_company]',
       '$_POST[car_expiration_date]','$_POST[car_tax_expirationdate]','$_POST[car_driver_name]','$_POST[ut_id]','$_POST[ad_id]')";


    $Query2 = mysqli_query($con, $sql2) or die("Database selection failed: " . mysqli_error($con));


    ?>
</body>

</html>