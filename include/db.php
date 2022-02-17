<?php
    $db_connect = mysqli_connect("127.0.0.1", "root", "", "gas_delivery");
    if(!$db_connect){
        die("database not connected... " .mysqli_connect-error());
    }
    