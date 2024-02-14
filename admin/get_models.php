<?php
// get_models.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['manufacturer'])) {
        $manufacturer = $_POST['manufacturer'];

        // Your database connection code here

        $mysqli = new mysqli('localhost', 'root', 'admin', 'vms');

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Fetch models for the selected manufacturer
        $modelQuery = "SELECT model FROM models WHERE manufacturer = '$manufacturer'";
        $models = $mysqli->query($modelQuery);

        // Prepare dropdown options
        $options = "<option value=''>Select Model</option>";
        while ($row = $models->fetch_assoc()) {
            $options .= "<option value='{$row['model']}'>{$row['model']}</option>";
        }

        echo $options;

        // Close the database connection
        $mysqli->close();
    }
}
?>