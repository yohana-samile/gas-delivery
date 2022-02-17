<!DOCTYPE html>
<html>
    <head>
        <title>gas delievey</title>
        <link rel="stylesheet" href="./css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body> 
        <h2 class="card text-center text-primary text-uppercase">gas delivery system</h2>
        <div class="container  d-flex justify-content-center col-9">
            <div class="card border-none" style="width: 500px">
            <h2 class="card text-center text-capitalize">costomer registration form</h2>
            <img src="./image/default.png" class="thumbnail mx-auto d-block" style="width: 120px; height: 120px">
                <form action="register_action.php" method="post"class="form">
                    <div class="form-group">
                        <input type="text" placeholder="enter firstname" name="firstname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="enter surname" name="surname" class="form-control" required>
                    </div> 
                    <select name="gender" class="form-control" required>
                        <option>---select gender---</option>
                        <option>male</option>
                        <option>female</option>
                    </select><br>
                    <div class="form-group">
                        <input type="text" placeholder="enter phone number" name="phone_no" class="form-control" required>
                    </div>
                    <select name="location_id" class="form-control" required>
                    <option>---select your street name---</option>
                        <?php
                            include './include/db.php';
                            $obtain_street = mysqli_query($db_connect, "SELECT * FROM `location` ");
                            $street_data = mysqli_num_rows($obtain_street);
                            while($street_data = mysqli_fetch_array($obtain_street)){
                                if($street_data >='1'){ ?>
                                    <option value="<?php echo $street_data['location_id']; ?>"><?php echo $street_data['street_name']; ?></option>

                                <?php }
                            
                            else{
                                echo mysqli_error($db_connect);
                            }
                        }?>
                    </select><br>
                    <div class="form-group" hidden>
                        <?php
                            include './include/db.php';
                            $select_pos = mysqli_query($db_connect, "SELECT * FROM `position` WHERE position_id = '3' ");
                            $data = mysqli_num_rows($select_pos);
                            while($data = mysqli_fetch_array($select_pos)){
                                if($data >='1'){ ?>
                                    <input type="text" class="form-control" value="<?php echo $data['position_id']; ?>" name="position_id" required>
                                <?php }
                            
                            else{
                                echo mysqli_error($db_connect);
                            }
                        }?>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="enter password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary float-right">register here</button>
                    </div>
                </form><br>
                <p class="text-center" >have an account click<span><a href="index.php" class="hyperlink">here</a><span></p>
            </div>
        </div>
    </body>
</html>