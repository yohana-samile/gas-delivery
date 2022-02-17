<?php
   session_start();
   $firstname =  $_SESSION['staff_data']['firstname'];
   $surname = $_SESSION['staff_data']['surname'];
   $_SESSION['staff_data']['phone_no'];
   if(!isset ($_SESSION['staff_data']['phone_no'])){
      header("location:../index.php");
   }
?>
<html lang = "en">
   <head>
      <!-- Meta tags -->
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
      
      <link rel = "stylesheet" href = "../css/bootstrap.min.css">
      <link rel = "stylesheet" href = "../css/bootstrap.css">
      <title>gas delivery</title>
   </head>
   <body>
   <h3 class="text-capitalize text-primary text-center">welcome <?php echo $surname.' '. $firstname; ?></h3>
      <div class = "container col-12">
         
         <nav class = "navbar navbar-expand-sm bg-primary navbar-dark">
            <a class = "navbar-brand text-capitalize" href = "index.php">gas delivary</a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" 
               data-target = "#navbarNavDropdown" aria-controls = "navbarNavDropdown" 
               aria-expanded = "false" aria-label = "Toggle navigation">
               
               <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class = "collapse navbar-collapse text-light" id = "navbarNavDropdown">
               <ul class = "navbar-nav">
                  <li class = "nav-item active">
                     <a class = "nav-link" href = "index.php">Home 
                        <span class = "sr-only">(current)</span>
                     </a>
                  </li>
                  <li class = "nav-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="modal fade" id="my">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h2 class="modal-title text-primary text-center text-capitalize">that is all we deal with</h2>
                                          <button class="btn btn-default" data-dismiss="modal">&times;</button>
                                       </div>
                                       <div class="modal-body">
                                          <p class="text-dark text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                             Adipisci labore vitae quasi reprehenderit magni vero? Eveniet eaque rerum labore quae officiis neque,
                                              dolor distinctio cupiditate reprehenderit. Nesciunt dignissimos quasi voluptatem.</p>
                                       </div>
                                       <div class="modal-footer">
                                          <button class="btn btn-danger" data-dismiss="modal">close</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <p class = "nav-link" data-toggle="modal" data-target="#my" style="cursor:pointer">About Us</p>
                        </div>
                     </div>
                  </li>

                  <!--another content -->
                  <li class = "nav-item">
                     <a class = "nav-link  text-light" href="request.php">Request available</a>
                  </li>
                  <li class = "nav-item">
                     <a class = "nav-link  text-light" href="new_gas.php">Add New Gas</a>
                  </li>
                  <li class = "nav-item dropdown">
                     <a class = "nav-link dropdown-toggle" href = "#" 
                        id = "navbarDropdownMenuLink" role = "button" data-toggle = "dropdown" 
                        aria-haspopup = "true" aria-expanded = "false">
                        
                        Library
                     </a>
                     
                     <div class = "dropdown-menu" aria-labelledby = "navbarDropdownMenuLink">
                        <a class = "dropdown-item" href = "#">View Profile</a>
                        <!-- change password btn -->
                        <a class = "dropdown-item" href = "#">change password</a>
                        <a class = "dropdown-item" href = "../include/logout.php">Logout</a>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
      <script src = "/js/jquery.js"></script>
      <!-- jQuery library -->
      <script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" 
         integrity =" sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
         crossorigin = "anonymous">
      </script>
      
      <!-- Popper -->
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
         integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
         crossorigin = "anonymous">
      </script>
      
      <!-- Latest compiled and minified Bootstrap JavaScript -->
      <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
         integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
         crossorigin =" anonymous">
      </script>
      <!-- Bootstrap CSS -->
   </body><br>
</html>