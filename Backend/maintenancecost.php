<?php

$sql = "SELECT AirlineID, Name, MaintenanceCost AS maintenance_cost FROM Airline";
$result = $conn->query($sql);

$data = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);

$conn->close();

?>