<?php
$sql = "SELECT FlightID, SourceAirport, DestinationAirport, ArrivalTime, DepartureTime, AirlineID FROM Flight";
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
            "status" => "Scheduled"  ]
    }
}

echo json_encode($data);

$conn->close();

?>