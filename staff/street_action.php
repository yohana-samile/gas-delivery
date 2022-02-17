<?php 
    include '../include/db.php';
    if(isset($_POST['submit'])){
        $street_name = $_POST["street_name"];
        $ward_name = $_POST["ward_name"];
        $insert = mysqli_query ($db_connect, "INSERT INTO `location` VALUES (NULL, '$street_name', '$ward_name')");
        
        if($insert){
            header('location:register_street.php?key=success');
            // echo "data sent";
        }
        else{
            echo mysqli_error($db_connect);
        }
        
    }