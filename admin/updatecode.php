<?php

session_start();

include("db_conn.php");

if(isset($_POST["submit"])){

    $id = $_POST["emp_id"];

    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];

    $query = "UPDATE employee SET f_name='$fname', l_name='$lname', email='$email', password='$password', mobile='$mobile', address = '$address' WHERE emp_id='$id' ";
    $result = mysqli_query($conn, $query);


    if($result){
        $_SESSION['status'] = "UPDATED";
        header("Location: addemployee.php");
    }
    else{
        $_SESSION['status'] = "NOT UPDATED";
        header("Location: manageemployee.php");
    }

}


?>