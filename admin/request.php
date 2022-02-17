<?php
    include '../include/admin_head.php';
    include '../include/db.php'; 
    $user_record = mysqli_query($db_connect, "SELECT * FROM request, customer WHERE request.customer_id = customer.customer_id");
    $user_obtained = mysqli_num_rows($user_record); ?>
<div class="container border col-11">
    <h2 class="text-primary text-center">This is today transasction</h2>
    <table class="table table-bordered">
        <thead class="bg-primary text-white text-center text-capitalize">
            <tr>
                <td>firstname</td>
                <td>surname</td>
                <td>customer phone no</td>
                <td>residence street</td>
                <td>time send request</td>
                <td>current status</td>
            </tr>
        </thead>
        <?php 
        while($user_obtained = mysqli_fetch_array($user_record)){
            if($user_obtained >='1'){ ?>
        <tbody>
            <tr>
                <td><?php echo $user_obtained['firstname']; ?></td>
                <td><?php echo $user_obtained['surname']; ?></td>
                <td><?php echo $user_obtained['phone_no']; ?></td>
                <td><?php echo $user_obtained['street_name']; ?></td>
                <td><?php echo $user_obtained['timee']; ?></td>
                <td><?php echo $user_obtained['status']; ?></td>
            </tr>
        <tbody>
        <?php }
            else if($user_obtained == '0'){
                echo "no data";
            }
        } ?>
    </table>
</div>