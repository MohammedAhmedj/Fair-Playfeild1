
<style>
    .colordiv{
        color:#fff !important;
    }
    
</style>

<?php


// Start the session
session_start();

// Include the connection file
include 'connect.php';

// Initialize username variable
$username = '';

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Retrieve user information from the database
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT user_name FROM user WHERE user_id = '$user_id'";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result->num_rows > 0) {
        // Fetch the user's username
        $user_data = $result->fetch_assoc();
        $username = $user_data['user_name'];
    }
}
?>

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav" style="background-color:#000; color:#FFF">
            <div class="container px-4 px-lg-5 colordiv"  >
                <a class="navbar-brand" href="index_us.php">Fair Play</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars" style="color:#FFF"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive" style="color:#FFF">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index_us.php">Home</a></li>
                       
        <li class="nav-item">
                        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">   <?php if (isset($_SESSION['user_id'])) ?>
    <!-- Display the welcome message and username -->
    <i class="fa-solid fa-user"></i> <?php echo $username;  ?></a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">My Profile</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
    </ul>
  </li>
                    </ul>
                </div>
            </div>
        </nav>







