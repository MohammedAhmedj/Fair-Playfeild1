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
include("menu.php");
      ?>
 <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center mt-5">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 mt-5">
    <div class="title">
        <h2>about</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum,
            aperiam!
        </p>
    </div>
    </div>
    </div>

    <div class="row mt-3">
    <div class="col-md-4 col-lg-4 col-xl-4 col-sm-12">
    <img src=".\img\logo.png" alt="Logo" width="250">
    
    </div>
    <div class="col-md-8 col-lg-8 col-xl-8 col-sm-12">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">History</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Vision</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Goals</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">history</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Vision</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">goals</div>
</div>

</div>
</div>

    

<br><br>
<br>
</div>

        <!-- Footer-->
    <?php   include("footer.php");  ?>
    </body>
</html>
