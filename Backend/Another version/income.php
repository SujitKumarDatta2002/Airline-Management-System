<?php
$conn = new mysqli("localhost", "root", "", "AirlineSystem");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT FlightID, TotalAmountFromTicket FROM Finance ORDER BY ID DESC"; // Modify as needed
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     echo json_encode($row);
// } else {
//     echo json_encode(["total_income" => 0]);
// }

// $conn->close();
if ($result->num_rows > 0) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo json_encode(["total_income" => 0]);
}
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$conn->close();


?>