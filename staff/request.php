<?php
    include '../include/head.php';
    include '../include/db.php';
    $record = mysqli_query($db_connect, "SELECT * FROM request, customer WHERE request.customer_id  = customer.customer_id ");
    $data = mysqli_num_rows($record); ?>
    <div class="container col-10">
        <table class="table  table-hover table-bordered">
            <thead class="bg-primary text-capitalize text-light">
                <tr>
                    <td>customer phone</td> 
                    <td>street names</td> 
                    <td>gas bland name</td> 
                    <td>kg</td>
                    <td>time booked</td> 
                    <td>current status</td>
                </tr>
            </thead> 
    <?php
    while($data = mysqli_fetch_array($record)){
        if($data){ ?>
        <tbody>
            <tr>
                <td><?php  echo $data['phone_no'] ?></td>
                <td><?php  echo $data['street_name']; ?></td>
                <td><?php  echo $data['gas_name']; ?></td>
                <td><?php  echo $data['kg']; ?></td>
                <td><?php  echo $data['timee']; ?></td>
                    <td>
                         <form action="action.php?request=<?php  echo $data['request_id']; ?>" method="post">
                             <?php $id = $data['request_id']; ?>
                            <input type="text" class="form-control pt-3" name="status" value="derivered" hidden>
                            <input name="submit" type="submit" class="btn btn-success" value="<?php  echo $data['status']; ?>">
                        </form>
                    </td>
            </tr>
        <?php }
    }
    
    ?> 