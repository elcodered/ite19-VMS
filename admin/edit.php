<?php

include('db_conn.php');

$id = "";
$email = "";
$password = "";
$fname = "";
$lname = "";
$mobile = "";
$address = "";

$errorMessage = "";
$successMessage = "";

// Check if the database connection is successful
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET['emp_id'])) {
        header("Location: manageemployee.php");
        exit;
    }

    $id = $_GET["emp_id"];

    $sql = "SELECT * FROM employee WHERE emp_id = $id";
    $result = $conn->query($sql);

    if (!$result) {
        die('Error in SQL query: ' . $conn->error);
    }

    $row = $result->fetch_assoc();

    if (!$row) {
        header("Location: addemployee.php");
        exit;
    }

    $email = $row["email"];
    $password = $row["password"];
    $fname = $row["f_name"];
    $lname = $row["l_name"];
    $mobile = $row["mobile"];
    $address = $row["address"];
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["emp_id"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];

    if (empty($id) || empty($email) || empty($password) || empty($fname) || empty($lname) || empty($mobile) || empty($address)) {
        $errorMessage = "All the fields are required";
    } else {
        // Use prepared statement to prevent SQL injection
        $sql = "UPDATE employee SET email = ?, password = ?, f_name = ?, l_name = ?, mobile = ?, address = ? WHERE emp_id = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die('Error preparing statement: ' . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param("ssssssi", $email, $password, $fname, $lname, $mobile, $address, $id);

        // Execute the statement
        $result = $stmt->execute();

        if (!$result) {
            $errorMessage = "Error updating record: " . $stmt->error;
        } else {
            $successMessage = "Client updated correctly";
            header("Location: manageemployee.php");
            exit;
        }

        // Close the statement
        $stmt->close();
    }
}

?>
