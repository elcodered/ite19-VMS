<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from the form
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $color = $_POST['color'];

    $mysqli = new mysqli('localhost', 'root', 'admin', 'vms');

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Start a transaction to ensure atomicity
    $mysqli->begin_transaction();

    // Insert the order into the customer table
    $insertCustomerQuery = "INSERT INTO customer (name, address, email, manufacturer, model, color) 
                            VALUES ('$name', '$address', '$email', '$manufacturer', '$model', '$color')";

    if ($mysqli->query($insertCustomerQuery) === TRUE) {
        // Update the status in the models table to 'sold'
        $updateStatusQuery = "UPDATE models SET status='sold' WHERE manufacturer='$manufacturer' AND model='$model' AND color='$color'";

        if ($mysqli->query($updateStatusQuery) === TRUE) {
            // Commit the transaction
            $mysqli->commit();

            // Display a popup message and redirect to customer_order.php
            echo "<script>alert('Order placed successfully!'); window.location.href='customer_order.php';</script>";
        } else {
            // Rollback the transaction in case of an error
            $mysqli->rollback();

            echo "Error updating status: " . $mysqli->error;
        }
    } else {
        // Rollback the transaction in case of an error
        $mysqli->rollback();

        echo "Error inserting customer order: " . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: customer_order.php");
    exit();
}
?>
