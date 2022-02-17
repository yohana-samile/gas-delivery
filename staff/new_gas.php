<?php 
    include '../include/head.php';
?>
<div class="container col-10 border"><br>
    <div class="row pt-4 justify-content-center">
        <div class="col-md-5">
            <div class="card" style="width: 26rem">
                <div class="card-header bg-primary text-light">
                    <h2 class="text-center text-light bg-primary text-capitalize">Add new gas</h2>
                </div><br>
                <div class="card- body">
                    <form action="new_gas_action.php" method="post">
                        <div class="form-group">
                            <input type="text" name="gas_name"  placeholder="enter bland gas name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="kg"  placeholder="gas volume (kg) " class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="price"  placeholder="gas price" class="form-control">
                        </div>
                        <?php include '../include/db.php';
                            $staff = $_SESSION['staff_data']['staff_id'];
                            ?>
                        <div class="form-group">
                            <input type="number" name="staff_id"  value="<?php echo $staff; ?>"  placeholder="sender" class="form-control" hidden>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit"  value="Add New Gas" class="bg-primary text-light form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
</div>
