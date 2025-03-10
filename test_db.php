<?php
$servername = "localhost";  // Server name
$username = "root";         // Username (default is root)
$password = "";             // No password (default for XAMPP)
$dbname = "bs_23";          // Database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
