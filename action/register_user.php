<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include_once '../settings/connection.php';

if(isset($_POST["submit"])) {
   
    $f_name=$_POST["f_name"];
    $l_name=$_POST["l_name"];
    $gender=$_POST["gender"];
    $dob=$_POST["DOB"];
    $phone_number=$_POST["Phone_number"];
    $email=$_POST["Email"];
    $password=$_POST["Passwords"];
    $hashed_password= password_hash($password, PASSWORD_DEFAULT);


    $i_query= "INSERT into users (Role_ID, f_name, l_name, gender, DOB, Phone_number, Email, Passwords)
    VALUES (2, '$f_name', '$l_name', '$gender', '$dob', '$phone_number', '$email', '$hashed_password')"; 

    if (mysqli_query($mysqli, $i_query)) {
        header("Location: ../login/login.php");
        exit();
    } else {
        echo "Error: " . $i_query . "<br>" . mysqli_error($mysqli);
    }
} 
?>