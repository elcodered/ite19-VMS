<?php

session_start();

include("db_conn.php");


if(isset($_POST["submit"])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['f_name'];
    $lastName = $_POST['l_name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `employee`(`emp_id`, `email`, `password`, `f_name`, `l_name`, `mobile`, `address`) 
        VALUES (NULL,'$email','$password','$firstName','$lastName','$mobile','$address')";

        $result = mysqli_query($conn, $sql);

        if($result) {
            $_SESSION['status'] = "Data Inserted Successfully!";
            header("Location: addemployee.php");
        }
        else{
            echo "Failed: " . mysqli_error($conn);
        }



}

?>