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
                <section class="signup-section">
                
                <div class="card mt-4">
<div class="card-header bg-primary text-center">

<img src=".\img\logo.png" alt="Logo" width="150"/>
</div>

<div class="card-body">
        <h2>Sign Up</h2>
        <form action="signup_code.php" method="post" id="signupForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="full-name" class="form-label">Full Name:</label>
                <input type="text" id="full-name" name="full_name" class="form-control" placeholder="Full Name" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" maxlength="8">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth Date:</label>
                <input type="date" id="birth_date" name="birth_date" class="form-control">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" id="address" name="address" placeholder="Address">
            </div>

            <div class="mb-3">
                <label for="user-type">User Type:</label>
                <select id="user-type" name="user_type" onchange="showPosition(this.value)">
                    <option value="select">Select</option>
                    <option value="player">Player</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="mb-3" id="position" style="display:none;">
                <label for="player-position">First Position:</label>
                <select id="player-position-one" name="player_position_priority_one">
                    <option value="goalkeeper">Goalkeeper</option>
                    <option value="defender">Defender</option>
                    <option value="midfielder">Midfielder</option>
                    <option value="attacker">Attacker</option>
                </select>
                <label for="player-rate-one">Rate (1-7):</label>
                <input type="number" id="player-rate-one" name="player_rate_one" min="1" max="7" /><br>

                <div class="mb-3">
                    <label for="player-position">Second Position:</label>
                    <select id="player-position-two" name="player_position_priority_two">
                        <option value="goalkeeper">Goalkeeper</option>
                        <option value="defender">Defender</option>
                        <option value="midfielder">Midfielder</option>
                        <option value="attacker">Attacker</option>
                    </select>
                    <label for="player-rate-two">Rate (1-7):</label>
                    <input type="number" id="player-rate-two" name="player_rate_two" min="1" max="7" /><br>
                </div>
            </div>


            <div class="mb-3">
                <label for="profile-picture" class="form-label">Profile Picture:</label>
                <input type="file" id="profile-picture" name="profile_picture" class="form-control" accept="image/png, image/jpeg">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <button type="button" class="btn btn-secondary" onclick="clearSignupForm()">Clear</button>
            </div>


        </form>
</div>
</div>
    </section>


                </div>
                </div>
                <br> <br>
                </div>



                <?php   include("footer.php");  ?>
    </body>
</html>