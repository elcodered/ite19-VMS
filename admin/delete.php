<?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $database = "vms";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM employee WHERE id = $id";
    $connection->query($sql);
    }

    echo "<script> window.location.href='manageemployee.php';</script>";
                    exit;

?>