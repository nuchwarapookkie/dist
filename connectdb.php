<?php
    $con = mysqli_connect("localhost","root","","register");
    mysqli_set_charset($con, 'utf8');
    //check connection
    if (mysqli_connect_error()){
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }

?>