<?php

    $server = "sql305.epizy.com";
    $username = "epiz_28738347";
    $password = "SKqFTjZY3n2R";
    $dbname = "epiz_28738347_data_ecomm";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if(!con){
        die("Connection failed:" .mysqli_connect_error());
    }
?>