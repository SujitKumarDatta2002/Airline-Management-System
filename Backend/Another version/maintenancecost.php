<?php

$conn = new mysqli("localhost", "root", "", "AirlineSystem");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT AirlineID, Name, MaintenanceCost AS maintenance_cost FROM Airline";
$result = $conn->query($sql);

$data = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
echo json_encode($data);

$conn->close();

?>