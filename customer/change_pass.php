<?php
    include '../include/db.php';
    $id = $_SESSION['user_data']['mamber_id'];
    $current_pass = $_POST['current_pass'];
    $new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];
    
    // comparison of pass...
    if($current_pass != $new_pass){
        echo "<script> alert('current password not equal to new password')</script>";
        echo "<script> window.location = 'index.php'</script>";

    }else{
        $query = "SELECT * FROM graphics_mamber WHERE mamber_id = '$id' ";
        $select = mysqli_query($query, $db_connect);
        $row mysqli_fetch_array($select);
        if($row['password'] != $current_pass ){
            echo "<script> alert('current password not metched')</script>";
            echo "<script> window.location = 'index.php' </script>";
        }else{
            $query1 = "UPDATE TABLE graphics_mamber SET password = '$new_password' WHERE mamber_id = '$id' ";
            $update = mysqli_query($query1, $db_connect);
            if( $confirm_pass = $current_pass ){
                echo "<script> alert('password changed')</script>";
                echo "<script> window.location = 'index.php' </script>";
            }
    }
}
?>