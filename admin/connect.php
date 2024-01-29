<?php

$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['f_name'];
$lastName = $_POST['l_name'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

//Database connection

$conn = new mysqli('localhost','root','admin','vmsdb');
if ($conn->connect_error) {
    die('Connection Failed : '. $conn->connect_error);
}
else {
    $stmt = $conn->prepare('insert into employee(email, password, f_name, l_name, mobile, address) values(?,?,?,?,?,?)');
    $stmt->bind_param('ssssss', $email, $password, $firstName, $lastName, $mobile, $address);
    $stmt->execute();
    echo'registration successful!';
    $stmt->close();
    $conn->close();
}

?>