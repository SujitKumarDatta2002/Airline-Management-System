<?php
$sql = "SELECT FlightID, AirlineID, FuelCost FROM Finance ORDER BY ID DESC LIMIT 1"; // Modify as needed
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(["total_fuel_cost" => 0]);
}
?>