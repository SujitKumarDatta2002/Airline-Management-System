<?php

$conn = new mysqli("localhost", "root", "", "AirlineSystem");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT FlightID, SourceAirport, DestinationAirport, ArrivalTime, DepartureTime FROM Flight";
$result = $conn->query($sql);

$data = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            "flightNo" => $row['FlightID'],
            "departure" => $row['DepartureTime'],
            "arrival" => $row['ArrivalTime'],
            "source" => $row['SourceAirport'],
            "destination" => $row['DestinationAirport'],
            "status" => "Scheduled"  ];
    }
}
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: *');
echo json_encode($data);

$conn->close();

?>