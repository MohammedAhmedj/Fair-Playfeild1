<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>


</style>
    </head>
    <body>


        <!-- Navigation-->
      <?php
      include 'connect.php';
include("menu.php");
      ?>




<div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center mt-5">
                <div class="col-md-6 col-lg-6 col-xl-6 col-sm-11 mt-5">
 <div class="card mt-4">
<div class="card-header bg-primary text-center">

<img src=".\img\logo.png" alt="Logo" width="150"/>
</div>

<div class="card-body">

                <section class="login-section">
      
        <form action="login_code.php" method="post" id="loginForm">
            <div class="mb-3">
                <label for="user_email" class="form-label">User Email:</label>
                <input type="email" id="user_email" name="user_email" pattern=".+@.+.com" class="form-control" placeholder="User email" required>
            </div>

            <div class="mb-3">
                <label for="user_password" class="form-label">Password:</label>
                <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-secondary" onclick="clearLoginForm()">Clear</button>
            <a href="forgot_password.php" style="font-size: 14px;">Forgot password?</a>
        </form>
    </section>

    </div>

    </div>



                </div>
                </div>
                <br>  <br>  <br>
                </div>



                <?php   include("footer.php");  ?>
    </body>
</html>