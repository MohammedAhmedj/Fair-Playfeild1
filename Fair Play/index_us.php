<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fair Play </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
.box{
background-color:#1A5276; 
color:#fff; 
border-radius:7px;


}

.box:hover{
background-color:#1C2833; 
color:#fff; 
box-shadow: 5px 5px 5px #1C2833;
border-radius:7px;
}

</style>
    </head>
    <body>
        <!-- Navigation-->
      <?php
include("menu_us.php");

?>

     
        <!-- Page Header-->
        
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center mt-5">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mt-5" >
                  

                <div class="row mt-5">
                        <div class="col-md-6 col-lg-4 col-xl-4 col-sm-12 mt-3" >
                        <div class="card box" style="height:130px; cursor: pointer;" onclick="window.open('CurrentMatche.php', '_self');">
                        <div class="card-body text-center">
                            <br>
                        <h5>Create Current Matches</h5>


                        </div>
                        </div>
                        </div>


                        <div class="col-md-6 col-lg-4 col-xl-4 col-sm-12 mt-3">
                        <div class="card box" style="height:130px; cursor: pointer;" onclick="window.open("https://www.w3schools.com");">
                        <div class="card-body text-center">
                            <br>
                        <h5>View Current Matches</h5>


                        </div>
                        </div>
</div>

                        <div class="col-md-6 col-lg-4 col-xl-4 col-sm-12 mt-3">
                        <div class="card box" style="height:130px; cursor: pointer;" onclick="window.open("https://www.w3schools.com");">
                        <div class="card-body text-center">
                            <br>
                        <h5>Add New Location</h5>


                        </div>
                        </div>
                        </div>

                       




                        </div>


                        

</div>
</div>
</div>
<?php   include("footer.php");  ?>
    </body>
</html>
