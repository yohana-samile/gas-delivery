<?php
    include './include/db.php';
    session_start();
    if(isset ($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select = mysqli_query($db_connect, "SELECT * FROM customer WHERE phone_no = '$username' AND password = '$password' ");
        $customer_data = mysqli_num_rows($select);
        if($customer_data){
            $customer_data = mysqli_fetch_array($select);
            $_SESSION['customer_data']=$customer_data;
            header('location:./customer/index.php');
        } else{
            $staff_record = mysqli_query($db_connect, "SELECT * FROM Staff_mamber WHERE email = '$username' AND password = '$password' ");
            $staff_data = mysqli_num_rows($staff_record);
            if($staff_data){
                $staff_data = mysqli_fetch_array($staff_record);
                $_SESSION['staff_data']=$staff_data;
                if($_SESSION['staff_data']['position_id'] == 1){
                header('location:./staff/index.php');
                }
                else if($_SESSION['staff_data']['position_id'] == 2){
                    header('location:./admin/index.php');
                } else{
                    echo "wrong entry";
                }
            }
        }
        if(!$customer_data && !$staff_data){
            echo "wrong username or pass";
        }
    }


?>