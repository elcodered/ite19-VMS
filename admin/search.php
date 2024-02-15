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

if (isset($_POST['query'])) {
    $searchText = $_POST['query'];

    $sql = "SELECT * FROM customer_sales WHERE name LIKE '%$searchText%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
    <tr>
        <td><b>Name:</b> {$row['name']}<br> <b>Email:</b> {$row['email']}<br> <b>Address:</b> {$row['address']} <br> <b>Contact No.:</b> {$row['contact_no']}</td>
        <td>{$row['manufacturer']}</td>
        <td>{$row['model']}</td>
        <td>{$row['color']}</td>
        <td>{$row['engine']}</td>
        <td>{$row['vin']}</td>
        <td>{$row['yearModel']}</td>
        <td>₱{$formattedCost}</td> <!-- Display the formatted cost -->
        <td>{$row['formatted_date']}</td>
        <td>
    </tr>
    ";
        }
    } else {
        echo "<p>No results found</p>";
    }
}

$conn->close();
?>
