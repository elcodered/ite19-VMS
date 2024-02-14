<?php
include('includes/header.php');
include('includes/navbar.php');

$mysqli = new mysqli('localhost', 'root', 'admin', 'vms');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get values from the form submission
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $engine = $_POST['engine'];
    $vin = $_POST['vin'];
    $yearModel = $_POST['yearModel'];
    $costPrice = $_POST['costPrice'];
    $status = 'Available'; // You can set a default status if needed

    // Insert data into the vehicles table
    $stmt = $mysqli->prepare("INSERT INTO vehicle (manufacturer, model, color, engine, vin, yearModel, cost, status, date_added) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");


    $stmt->bind_param("sssssdss", $manufacturer, $model, $color, $engine, $vin, $yearModel, $costPrice, $status);

    if ($stmt->execute()) {
        echo "<script>alert('Vehicle Successfully Added!');</script>";
        echo "<script> window.location.href='allvehicles.php';</script>";
                    exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$mysqli->close();

include('includes/footer.php');
?>
