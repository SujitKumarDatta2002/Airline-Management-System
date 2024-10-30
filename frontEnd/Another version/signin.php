<?php
require_once("dbconnect.php");

if(isset($_POST['regEmail']) && isset($_POST['regConfirmPassword'])){
    $user = $_POST['regEmail'];
    $pass = $_POST['regConfirmPassword'];
    

    // Prepare SQL query using placeholders
    // $query = "SELECT * FROM registration WHERE  ConfirmPassword = ? AND Email = ? ";
    $query = "SELECT * FROM registration WHERE  Email = ? AND ConfirmPassword = ? ";
    // Prepare statement
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ss",  $user,  $pass);

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Store result
    $result = mysqli_stmt_get_result($stmt);
    header("Location: adminPage.php");
    // Check if there is a matching row
    mysqli_stmt_close($stmt);
}
else {
    
    echo "Wrong user name and password";
}
// // Close connection
mysqli_close($conn);

?>

