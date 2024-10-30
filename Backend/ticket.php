<?php
// $sql = "SELECT FlightID, TotalSaleFromTicket FROM Finance ORDER BY ID DESC LIMIT 1"; 
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     echo json_encode($row);
// } else {
//     echo json_encode(["total_tickets_sold" => 0]);
// }

// $conn->close();
require_once "dbconnection.php";
// $sql = "SELECT FlightID, TotalSaleFromTicket FROM Finance ORDER BY ID ";
// $result = $conn->query($sql);

// if ($result) {
//     if ($result->num_rows > 0) {
//         $row = $result->fetch_assoc();
//         echo json_encode([
//             "FlightID" => $row['FlightID'],
//             "TotalSaleFromTicket" => $row['TotalSaleFromTicket'],
//             "total_tickets_sold" => 1 // or adjust based on your data
//         ]);
//     } else {
//         echo json_encode(["total_tickets_sold" => 0]);
//     }
// } else {
//     echo json_encode(["error" => "Query failed: " . $conn->error]);
// }

// $conn->close();
$sql = "SELECT FlightID, SUM(TicketsSold) AS TotalSaleFromTicket FROM tickets GROUP BY FlightID";
$result = $conn->query($sql);

// Output in JSON format
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    echo json_encode(["message" => "No ticket sale data available"]);
}

$conn->close();

?>