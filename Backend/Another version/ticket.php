<?php

// require_once "dbconnect.php";
// $sql = "SELECT FlightID, TotalSaleFromTicket FROM Finance ORDER BY ID ";
// $result = $conn->query($sql);

// if ($result) {
//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         echo json_encode([
//             "FlightID" => $row['FlightID'],
//             "TotalSaleFromTicket" => $row['TotalSaleFromTicket'],
//             "total_tickets_sold" => 1 
//         ]);
//     } else {
//         echo json_encode(["total_tickets_sold" => 0]);
//     }
// } else {
//     echo json_encode(["error" => "Query failed: " . $conn->error]);
// }

// $conn->close();


// Database connection
$conn = new mysqli("localhost", "root", "", "AirlineSystem");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your SQL query to fetch the data
$sql = "SELECT FlightID, TotalSaleFromTicket FROM Finance";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
  }
  
  // Fetch the data
  $data = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }
  
  // Close the database connection
  mysqli_close($conn);
  
  // Send the response in JSON format
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: *');
  echo json_encode($data);



?>