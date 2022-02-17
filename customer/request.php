<?php
    include '../include/db.php';    
    if(isset ($_POST['submit'])){
        $street_name = $_POST["street_name"];
        $gas_name = $_POST["gas_name"];
        $kg = $_POST["kg"];
        $customer_id = $_POST["customer_id"];
        $timee = $_POST["timee"];
        
        $send_request = mysqli_query($db_connect, "INSERT INTO `request` (`request_id`, `street_name`, `gas_name`, `kg`, `customer_id`, `timee`)
         VALUES (NULL, '$street_name', '$gas_name', '$kg', '$customer_id', CURRENT_TIMESTAMP)");
        if($send_request){
            header('location:index.php?key=success');
            // echo "data inserted";
        }
        else{
            echo mysqli_error($db_connect);
        }
    }
    else if(!isset ($_POST['submit'])){
        echo "sorry all field are mandatory";
    }