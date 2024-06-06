<?php
// Define database connection parameters
$servername = "localhost";
$username = "root"; // The MySQL database username
$password = ""; // The password for the MySQL database user
$database = "project"; // The name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve email and password from form submission
$email = $conn->real_escape_string($_POST['email']);
$pass = $conn->real_escape_string($_POST['pass']);
session_start();

// Prepare SQL statement to prevent SQL injection
$stmt = $conn->prepare("SELECT username,profile FROM userbase WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $pass);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {
    $_SESSION["email"] = $email;
    $_SESSION["name"] = $row['username'];
    $_SESSION["profile"] = $row['profile'];
    header("Location: home.php");
    exit();
} else {
    // Login failed
    echo "Invalid email or password.";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

