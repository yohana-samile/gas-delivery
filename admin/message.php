<?php
  include '../include/admin_head.php';                
  include '../include/db.php';                
   $street_record = mysqli_query($db_connect, "SELECT * FROM `contact` ");
   $street_data = mysqli_num_rows($street_record); ?>
   <div class="container">
      <table class="table table-bordered">
        <thead class="bg-primary text-light">
          <tr>
            <td>sender id</td>
            <td>message</td>
            <td>status</td>
          </tr>
        </thead>
        <tbody>
        <?php while($street_data = mysqli_fetch_array($street_record)){
          if($street_data >='1'){ ?>
            <tr>
              <td><?php echo $street_data['customer_id']; ?></td>
              <td><?php echo $street_data['message']; ?></td>
              <td class="btn btn-info">readable</td>
            </tr>
        </tbody>
        <?php
         }
        } ?>
      </table>