<?php include '../include/head_customer.php'; ?><br>
<div class="container border">
    <p class="text-success float-left">use this number<br>to make payment<br></p>
    <p class="text-success float-left">0745668526</p>
    <div class="container">
        <div class="row pt-4 justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h2 class="card-title  text-light text-capitalize text-center">fill the form below to book your gas</h2>
                    </div>
                    <div class="card-header">
                        <form action="request.php" method="post" >
                            <div class="form-group">
                                <select name="street_name" class="form-control"  required="">
                                    <option>--select street you from</option>
                                    <?php 
                                        include '../include/db.php';
                                    
                                        $street_name = mysqli_query($db_connect, "SELECT street_name FROM `location` ");
                                                $street_data = mysqli_num_rows ($street_name);
                                                while($street_data = mysqli_fetch_array($street_name)){
                                                    if($street_data >='1'){ ?>
                                                        <option value="<?php echo $street_data['street_name']; ?>" required=""><?php echo $street_data['street_name']; ?></option>
                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="gas_name" class="form-control"  required="">
                                    <option>--select GAS name</option>
                                    <?php 
                                        include '../include/db.php';
                                    
                                        $record = mysqli_query($db_connect, "SELECT gas_name FROM `gas` ");
                                                $gas_data = mysqli_num_rows ($record);
                                                while($gas = mysqli_fetch_array($record)){
                                                    if($gas >='1'){ ?>
                                                        <option value="<?php echo $gas['gas_name']; ?>"  required=""><?php echo $gas['gas_name']; ?></option>
                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="kg" class="form-control"  required="">
                                    <option>--select gas VOLUME</option>
                                    <?php 
                                        include '../include/db.php';
                                    
                                        $gas_record = mysqli_query($db_connect, "SELECT kg FROM `gas` ");
                                                $gas_data = mysqli_num_rows ($gas_record);
                                                while($gas_data = mysqli_fetch_array($gas_record)){
                                                    if($gas_data >='1'){ ?>
                                                        <option value="<?php echo $gas_data['kg']; ?>"  required=""><?php echo $gas_data['kg']; ?></option>
                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="form-group" hidden>
                                    <?php 
                                        include '../include/db.php';
                                        $id = $_SESSION['customer_data']['customer_id'];
                                        $customer_record = mysqli_query($db_connect, "SELECT * FROM `customer` WHERE customer_id ='$id' ");
                                            $customer_data = mysqli_num_rows ($customer_record);
                                                if($customer_data >='1'){ 
                                                    $customer_data = mysqli_fetch_array($customer_record) ?>
                                                    <input name="customer_id" class="form-control" value="<?php echo $customer_data['customer_id']; ?>"  required="">
                                    <?php } ?>
                            </div>
                            <div class="form-group" hidden>
                                <input type="time" name="timee">
                            </div>
                            <div class="form-group">
                                <input type="submit"  class="form-control bg-primary text-white"  name="submit" value="send request">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</div><br>
<!-- booking info -->
<div class="container border">
    <h2 class="text-primary text-capitalize text-center">this is your booking history</h2>
    <?php
        include '../include/db.php';
        $phone_no = $_SESSION['customer_data']['phone_no'];
        $id = $_SESSION['customer_data']['customer_id'];
        $user_record = mysqli_query($db_connect, "(SELECT * FROM request WHERE customer_id = '$id') ");
        $user_data = mysqli_num_rows($user_record); ?>
        <table class="table table-bordered table-hover">
                <thead class="bg-primary text-light">
                    <tr class="text-uppercase">
                        <td>street name</td>
                        <td>gas bland name</td>
                        <td>gas volume (kg)</td>
                        <td>time request sent</td>
                        <td>customer phone no</td>
                        <td>price</td>
                        <td>status</td>
                    </tr>
                </thead>
                    <?php
                    while($user_data = mysqli_fetch_assoc($user_record)){
                        if($user_data >='1'){ ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $user_data['street_name']; ?></td>
                                    <td><?php echo $user_data['gas_name']; ?></td>
                                    <td><?php echo $user_data['kg']; ?></td>
                                    <td><?php echo $user_data['timee']; ?></td>
                                    <td><?php echo $phone_no; ?></td>
                                    <?php if($user_data['kg'] = '120'){ ?>
                                        <td><?php echo "120,000" ?></td>
                                    <?php }
                                    else if($user_data['kg'] = '45'){ ?>
                                        <td><?php echo "45,000" ?></td>
                                    <?php }
                                    else{ ?>
                                        <td><?php echo "30,000" ?></td>
                                    <?php } ?>
                                     <td class="btn btn-info"><?php echo $user_data['status']; ?></td>
                                </tr>
                            </tbody>
                            <?php }
                    }
                ?>
        </table>
</div>