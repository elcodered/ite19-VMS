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
    $v_id = $_POST['v_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $engine = $_POST['engine'];
    $vin = $_POST['vin'];
    $yearModel = $_POST['yearModel'];
    $cost = $_POST['cost'];

    // Insert data into the vehicles table
    $stmt = $mysqli->prepare("INSERT INTO customer_sales (name, email, address, contact_no, manufacturer, model, color, engine, vin, yearModel, cost, dateSold) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");


    $stmt->bind_param("sssssssssss", $name, $email, $address, $contact_no, $manufacturer, $model, $color, $engine, $vin, $yearModel, $cost);

    if ($stmt->execute()) {
        echo "<script>alert('Vehicle Successfully Sold!');</script>";
        echo "<script> window.location.href='soldvehicles.php';</script>";

        // Now, let's delete data from the vehicle table
        $deleteStmt = $mysqli->prepare("DELETE FROM vehicle WHERE v_id = ?");
        $deleteStmt->bind_param("s", $v_id);
        $deleteStmt->execute();
        $deleteStmt->close();

        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$mysqli->close();

?>

<?php

include('includes/footer.php');
?>
