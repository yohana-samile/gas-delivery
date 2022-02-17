<?php
  include '../include/admin_head.php';                
  include '../include/db.php';                
   $street_record = mysqli_query($db_connect, "SELECT * FROM `location` ");
   $street_data = mysqli_num_rows($street_record); ?>
   <div class="container">
      <table class="table table-bordered">
        <thead class="bg-primary text-light">
          <tr>
            <td>street name</td>
            <td>ward name</td>
          </tr>
        </thead>
        <tbody>
        <?php while($street_data = mysqli_fetch_array($street_record)){
          if($street_data >='1'){ ?>
            <tr>
              <td><?php echo $street_data['street_name']; ?></td>
              <td><?php echo $street_data['ward_name']; ?></td>
            </tr>
        </tbody>
        <?php
         }
        } ?>
      </table>