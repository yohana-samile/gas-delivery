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
            <h2 class="card text-center text-capitalize">user login form</h2>
            <img src="./image/default.png" class="thumbnail mx-auto d-block" style="width: 120px; height: 120px">
                <form action="login_action.php" method="post"class="form">
                    <div class="form-group">
                        <input type="text" placeholder="enter username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="enter password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary float-right">login here</button>
                    </div>
                </form><br>
                <p class="text-center" >dont have an account click<span><a href="register.php" class="hyperlink">here</a><span></p>
            </div>
        </div>
    </body>
</html>