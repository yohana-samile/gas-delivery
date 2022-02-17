<?php 
    include '../include/head.php';
?>
<div class="container col-10 border"><br>
    <div class="row pt-4 justify-content-center">
        <div class="col-md-5">
            <div class="card" style="width: 26rem">
                <h4 class="text-danger text-center"><?php if(isset($_GET['success'])){
                    echo "new street added successful";
                }?></h4>
                <div class="card-header bg-primary text-light">
                    <h2 class="text-center text-light bg-primary text-capitalize">Add new street</h2>
                </div><br>
                <div class="card- body">
                    <form action="street_action.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="street_name"  placeholder="enter street name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="ward_name"  placeholder="enter ward name " class="form-control" required>
                        </div>
                        <!-- <?php include '../include/db.php'; $staff = $_SESSION['staff_data']['staff_id']; ?>
                        <div class="form-group">
                            <input type="text" value="<?php echo $staff; ?>" name="staff_id" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="submit"  value="Add Street" class="bg-primary text-light form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
</div>
