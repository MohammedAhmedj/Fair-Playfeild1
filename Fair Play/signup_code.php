<?php
// Include the connection file
include 'connect.php';

// Function to sanitize user input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// Function to validate full name
function validateFullName($name) {
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        return "Only letters are allowed";
    }
    return "";
}

// Function to validate phone number
function validatePhoneNumber($phone) {
    if (!preg_match("/^[0-9]*$/", $phone)) {
        return "Only numbers are allowed";
    }
    return "";
}

// Function to validate email
function validateEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Enter a valid email address";
    }
    return "";
}

// Function to validate password
function validatePassword($password) {
    if (!preg_match("/^[A-Za-z0-9&\-$#@]*$/", $password)) {
        return "Password must contain [A-Z], [a-z], [0-9],(&, $, #, @)";
    }
    return "";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form inputs
    $name = sanitizeInput($_POST['full_name']);
    $phone = sanitizeInput($_POST['phone']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']); // No need to hash the password in this version
    $birthDate = sanitizeInput($_POST['birth_date']);
    $address = sanitizeInput($_POST['address']);
    $userType = sanitizeInput($_POST['user_type']);

    // Validate inputs
    $nameError = validateFullName($name);
    $phoneError = validatePhoneNumber($phone);
    $emailError = validateEmail($email);
    $passwordError = validatePassword($password);

    // Check if any errors occurred
    if (!empty($nameError) || !empty($phoneError) || !empty($emailError) || !empty($passwordError)) {
        // Redirect back to sign up page and display errors
        echo '<script>
            alert("';
        if (!empty($nameError)) {
            echo 'Full Name: '.$nameError.'\\n';
        }
        if (!empty($phoneError)) {
            echo 'Phone Number: '.$phoneError.'\\n';
        }
        if (!empty($emailError)) {
            echo 'Email: '.$emailError.'\\n';
        }
        if (!empty($passwordError)) {
            echo 'Password: '.$passwordError;
        }
        echo '");
            window.location.href = "signup.php";
        </script>';
        exit(); // Prevent further execution
    }

    // Default value for user_picture field
    $defaultPicture = ".\img/default_picture.jpg";

    // SQL query to insert user data into user table
    $sql = "INSERT INTO user (user_name, user_email, user_phone, user_password, user_birth_date, user_address, user_type, user_picture)
            VALUES ('$name', '$email', '$phone', '$password', '$birthDate', '$address', '$userType', '$defaultPicture')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
        alert("User registered successfully");
        window.location.href = "Signin.php";
      </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Full Name: <input type="text" name="full_name"><br>
        Phone: <input type="text" name="phone"><br>
        Email: <input type="text" name="email"><br>
        Password: <input type="password" name="password"><br>
        Birth Date: <input type="date" name="birth_date"><br>
        Address: <textarea name="address"></textarea><br>
        User Type: <input type="text" name="user_type"><br>
        <input type="submit" value="Submit">
        <input type="button" value="Clear" onclick="clearForm()">
    </form>

    <script>
        function clearForm() {
            document.querySelector("form").reset();
        }
    </script>
</body>
</html>
