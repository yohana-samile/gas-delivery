<?php
    include './include/db.php';    
    if(isset ($_POST['submit'])){
        $firstname = $_POST["firstname"];
        $surname = $_POST["surname"];
        $gender = $_POST["gender"];
        $phone_no = $_POST["phone_no"];
        $location_id = $_POST["location_id"];
        $position_id = $_POST["position_id"];
        $password = $_POST["password"];

        $insert_customer = mysqli_query($db_connect, "INSERT INTO `customer` (`customer_id`, `firstname`, `surname`, `gender`, `phone_no`, `location_id`, `position_id` , `password`) 
        VALUES (NULL, '$firstname', '$surname', '$gender', '$phone_no', '$location_id' , '$position_id', '$password')");
        if($insert_customer){
            header('location:index.php');
            // echo "data inserted";
        }
        else{
            echo mysqli_error($db_connect);
        }
    }