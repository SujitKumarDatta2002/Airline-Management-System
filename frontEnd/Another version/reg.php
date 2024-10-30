<?php


require_once("dbconnect.php");

if(isset($_POST['regName']) && isset($_POST['regPhone']) && isset($_POST['regNationalId'])){
    $name = $_POST['regName'];
    $phone = $_POST['regPhone'];
    $nationalId = $_POST['regNationalId'];
    $email= $_POST['regEmail'];
    $address = $_POST['regAddress'];
    $createPassword = $_POST['regCreatePassword'];
    $confirmPassword = $_POST['regConfirmPassword'];
    $query = "INSERT INTO registration(Name, PhoneNumber, NationalIDNumber,Email, Address, CreatePassword, ConfirmPassword) values(?, ?, ?, ?, ?, ?, ?)";

    // Prepare statement
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssssss", $name, $phone,$nationalId,$email,$address, $createPassword, $confirmPassword);

    // Execute statement
    mysqli_stmt_execute($stmt);

    // Store result
    $result = mysqli_stmt_get_result($stmt);
    header("Location: logIn.php");
    // Check if there is a matching row
    

    // Close statement
    mysqli_stmt_close($stmt);
}
else{
    echo "logged in";
}
// Close connection
mysqli_close($conn);
?>




// require_once("dbconnect.php");

// if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])){
//     $name = $_POST['name'];
//     $user = $_POST['username'];
//     $pass = $_POST['password'];

//     // Prepare SQL query using placeholders
//     $query = "INSERT INTO user(name, username, password) values(?, ?, ?)";
    
//     // Prepare statement
//     $stmt = mysqli_prepare($conn, $query);

//     // Bind parameters
//     mysqli_stmt_bind_param($stmt, "sss", $name, $user, $pass);

//     // Execute statement
//     mysqli_stmt_execute($stmt);

//     // Store result
//     $result = mysqli_stmt_get_result($stmt);

//     // Check if there is a matching row
//     if(true){
//         echo "Bondhu Sagotom!";
//         header("Location: index.php");
//         exit; // Make sure to exit after redirection
//     } else {
//         echo "Get Out";
//     }

//     // Close statement
//     mysqli_stmt_close($stmt);
// }

// // Close connection
// mysqli_close($conn);
