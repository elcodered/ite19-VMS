<?php

$email = "";
$userPassword = ""; // Use a different variable name for the user input password

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $userPassword = $_POST['password']; // Use the new variable name for user input password

    // Create connection
    $servername = "localhost";
    $dbUsername = "root"; // Changed variable name to avoid conflicts
    $dbPassword = "admin"; // Changed variable name to avoid conflicts
    $dbname = "vms";

    $connection = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Validate login
    $query = "SELECT * FROM employee WHERE email='$email' AND password='$userPassword'"; // Use the new variable name for user input password

    $result = $connection->query($query);

    if ($result->num_rows == 1) {
        // Login success
        header("Location: ../admin/index.php");
        exit();
    } else {
        // Login failed
        echo "<script>alert('Wrong Email or Password!');</script>";
        
        echo "<script> window.location.href='login.html';</script>";
    }

}

$connection->close();

?>

<?php

include('includes/scripts.php');

?>
