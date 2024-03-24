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