<?php
// Database connection settings
$host = "localhost";
$user = "root";
$pass = "";
$db = "booknest";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Get form data safely
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$gmail = $_POST['gmail'];
$password = ($_POST['password']); 

// Insert query
$sql = "INSERT INTO users (first_name, last_name, username, gender, dob, gmail, password)
        VALUES ('$fname', '$lname', '$username', '$gender', '$dob', '$gmail', '$password')";

// Run query
if ($conn->query($sql) === TRUE) {
    echo "Registration successful! <a href='login.html'>Login here</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
