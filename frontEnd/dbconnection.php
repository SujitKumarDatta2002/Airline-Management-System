
<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "AirlineSystem"; // Change to your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if ($conn) {
//     echo "success";
// }
// else{
//     die("Connection failed: " .mysqli_connect_error());
// }
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Successfully connected to the database!";
}


?>
