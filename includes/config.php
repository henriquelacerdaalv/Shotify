<?php
    ob_start();

    $timezone = date_default_timezone_set("America/Sao_Paulo");

    $connect = mysqli_connect("localhost","root","","shotfy");

    if(mysqli_connect_errno()){
        echo "Failed to connect:" . mysqli_connect_errno();
    }
?>