<?php
// Assuming you have a MySQL database with a table named 'items'
$host = "localhost";
$username = "root";
$password = "admin";
$database = "vms";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Modify the SQL query to include the search term
$sql = "SELECT c_id, name, email, address, contact_no, manufacturer, model, color, engine, vin, yearModel, cost, DATE_FORMAT(dateSold, '%m/%d/%Y') as formatted_date FROM customer_sales";

// Add the WHERE clause for searching
if (!empty($searchTerm)) {
    $sql .= " WHERE name LIKE '%$searchTerm%' OR email LIKE '%$searchTerm%' OR address LIKE '%$searchTerm%' OR contact_no LIKE '%$searchTerm%' OR manufacturer LIKE '%$searchTerm%' OR model LIKE '%$searchTerm%' OR color LIKE '%$searchTerm%' OR engine LIKE '%$searchTerm%' OR vin LIKE '%$searchTerm%' OR yearModel LIKE '%$searchTerm%' OR cost LIKE '%$searchTerm%' OR dateSold LIKE '%$searchTerm%'";
}

$result = $conn->query($sql);

$conn->close();
?>
