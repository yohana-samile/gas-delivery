<?php include '../include/admin_head.php'; ?>
<div class="row d-flex justify-content-center">
    <?php include '../include/db.php'; 
    $street_record = mysqli_query($db_connect, "SELECT * FROM `contact`");
    $message = mysqli_num_rows($street_record); ?>
    <a href="message.php" class="hyperlink" style="text-decoration:none">
        <div class="col d-flex justify-content-center">
            <div class="card bg-primary text-light" style="width:18rem;">
                <div class="card-body">
                    <p>message from customer</p>
                    <h3>total sms <?php echo $message ?></h3>
                </div>
            </div>
        </div>
    </a>
    <?php include '../include/db.php'; 
    $street_record = mysqli_query($db_connect, "SELECT * FROM `location`");
    $street_data = mysqli_num_rows($street_record); ?>
    <a href="street_list.php" class="hyperlink" style="text-decoration:none">
        <div class="col d-flex justify-content-center">
            <div class="card bg-primary text-light" style="width:18rem;">
                <div class="card-body">
                    <p class="text-center">strret we work with </p>
                    <h3 class="text-center">total street <?php echo $street_data; ?></h3>
                </div>
            </div>
        </div>
    </a>
    <?php include '../include/db.php'; 
    $user_record = mysqli_query($db_connect, "SELECT sum(price) FROM `gas`");
    $user_obtained = mysqli_num_rows($user_record);
    while($user_obtained = mysqli_fetch_array($user_record)){ ?>
    <a href="request.php" class="hyperlink" style="text-decoration:none">
        <div class="col d-flex justify-content-center">
            <div class="card bg-primary text-light" style="width:18rem;">
                <div class="card-body">
                    <p class="text-center">total today amount </p>
                    <h3 class="text-center"><?php echo $user_obtained['sum(price)']; echo "/Tsh"; ?></h3>
                </div>
            </div>
        </div>
    </a><?php } ?>
    <?php include '../include/db.php'; 
    $user_record = mysqli_query($db_connect, "SELECT * FROM `customer`");
    $user_obtained = mysqli_num_rows($user_record); ?>
    <a href="user_list.php" class="hyperlink" style="text-decoration:none">
        <div class="col d-flex justify-content-center">
            <div class="card bg-primary text-light" style="width:18rem;">
                <div class="card-body">
                    <p class="text-center">available user </p>
                    <h3 class="text-center"><?php echo $user_obtained; ?></h3>
                </div>
            </div>
        </div>
    </a>
</div><br>
<?php include '../include/db.php'; 
    $user_record = mysqli_query($db_connect, "SELECT * FROM `staff_mamber`");
    $user_obtained = mysqli_num_rows($user_record); ?>
<div class="container border col-11">
    <h2 class="text-primary text-center">This is list of available staff mambers</h2>
    <table class="table table-bordered">
        <thead class="bg-primary text-white text-center text-capitalize">
            <tr>
                <td>firstname</td>
                <td>surname</td>
                <td>email</td>
                <td>phone_no</td>
                <td>position name</td>
                <td >delete user</td>
            </tr>
        </thead>
        <?php 
        while($user_obtained = mysqli_fetch_array($user_record)){
            if($user_obtained >='1'){
             $pos = $user_obtained['position_id'];
             $pos = "staff mamber"; ?>
        <tbody>
            <tr>
                <td><?php echo $user_obtained['firstname']; ?></td>
                <td><?php echo $user_obtained['surname']; ?></td>
                <td><?php echo $user_obtained['email']; ?></td>
                <td><?php echo $user_obtained['phone_no']; ?></td>
                <td><?php  echo $pos ?></td>
                <td>
                    <a href="" class="btn btn-info text-light">delete user</a>
                </td>
            </tr>
        <tbody>
        <?php }
            else if($user_obtained == '0'){
                echo "no data";
            }
        } ?>
    </table>
</div>
    