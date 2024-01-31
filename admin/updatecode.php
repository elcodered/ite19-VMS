<?php

include('db_conn.php');

$id="";
$email="";
$password="";
$fname="";
$lname="";
$mobile="";
$address="";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!isset($_GET['emp_id'])){
        header("Location: manageemployee.php");
        exit;
    }
    $id = $_GET["emp_id"];

    $sql = "SELECT * FROM employee WHERE id = $id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("Location: addemployee.php");
        exit;
    }
    $email = $row["email"];
    $password = $row["password"];
    $fname = $row["f_name"];
    $lname = $row["l_name"];
    $mobile = $row["mobile"];
    $address = $row["address"];


}
else{

    $id = $POST["emp_id"];
    $email = $POST["email"];
    $password = $POST["password"];
    $fname = $POST["f_name"];
    $lname = $POST["l_name"];
    $mobile = $POST["mobile"];
    $address = $POST["address"];

    do{
        if(empty($id) || empty($email) || empty($password) || empty($fname) || empty($lname) || empty($mobile) || empty($address)){
            $errorMessage = "All the fields are required";
            break;
    }

    $sql = "UPDATE employee" .
            "SET email = '$email', password = '$password', f_name = '$fname', l_name = '$lname', mobile = '$mobile', address = '$address'" .
            "WHERE emp_id = $id";

            $result = $connection->query($sql);

            if(!$result){
                $errorMessage = "Invalid query" . $conn->connect_error;
                break;
            }

            $successMessage = "Client updated correctly";
            header("Location: manageemployee.php");
            exit;

}
while(false);

}

?>