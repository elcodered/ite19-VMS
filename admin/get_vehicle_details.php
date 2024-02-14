<?php
$mysqli = new mysqli('localhost', 'root', 'admin', 'vms');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Validate and sanitize manufacturer and model inputs
$manufacturer = $mysqli->real_escape_string($_POST['manufacturer']);
$model = $mysqli->real_escape_string($_POST['model']);

// Fetch vehicle details based on selected manufacturer and model
$detailsQuery = "SELECT color, engine, vin, year_model FROM models WHERE manufacturer = '$manufacturer' AND model = '$model'";
$details = $mysqli->query($detailsQuery);

$response = array();

if ($details->num_rows > 0) {
    $row = $details->fetch_assoc();
    $response['color'] = $row['color'];
    $response['engine'] = $row['engine'];
    $response['vin'] = $row['vin'];
    $response['yearModel'] = $row['year_model'];
}

// Set the response content type to JSON
header('Content-Type: application/json');

echo json_encode($response);
?>