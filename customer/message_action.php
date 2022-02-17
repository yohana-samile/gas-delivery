<?php 
    include '../include/db.php';
        if(isset ($_POST['submit'])){
        $customer_id  = $_POST['customer_id'];
        $message  = $_POST['massege'];

        $send_message = mysqli_query($db_connect, "INSERT INTO `contact` VALUES(null, '$customer_id', '$message') ");
        if($send_message){
            header('location:index.php?key=success');
            // echo "message sent";
        }else{
            echo mysqli_error($db_connect);
        }
    }
?>