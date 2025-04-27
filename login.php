<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "booknest";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    if ($password === $row['password']) {
        // Redirect to index3.html
        header("Location: index3.html");
        exit();
    } else {
        echo "Incorrect password!";
    }
} else {
    echo "Username not found!";
}

$conn->close();
?>
