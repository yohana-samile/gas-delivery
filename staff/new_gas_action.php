<?php
    include '../include/db.php';
    if(isset ($_POST['submit'])){
        $gas_name = $_POST['gas_name'];
        $kg = $_POST['kg'];
        $price = $_POST['price'];
        $staff_id = $_POST['staff_id'];
        $insert = mysqli_query($db_connect, "INSERT INTO `gas` VALUES (NULL, '$gas_name', '$kg', '$price', '$staff_id')");
        if(!$insert){ 
            echo '<script>alert("sorry this page not current work please contact system administrator 0745668527")</script>';
               echo "<script>window.location='new_gas.php'</script>";
        }
        else{
            echo mysqli_error($db_connect);
        }
    }
?>