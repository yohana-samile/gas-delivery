<?php
    include '../include/db.php';
    // status change
    $request = $_GET['request'];
        echo $request;
    $select = mysqli_query($db_connect, "SELECT * FROM request WHERE request_id='$request' ");
    $id = mysqli_fetch_array($select);

    if(isset($_POST['submit'])){
        $status = $_POST['status']; 
        $edit =  mysqli_query($db_connect, "UPDATE `request` SET status='$status' WHERE request_id = '$request' ");
        if($edit){
            mysqli_close($db_connect);
            header('location:request.php?key=error'); 
            exit;  
            // echo "change";
        }
        else{
            echo mysqli_error($db_connect);
        }
    
    }?>