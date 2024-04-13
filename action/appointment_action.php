<?php 
session_start();
include_once '../settings/connection.php';

if(isset($_POST["submit"])) {

    $salon=$_POST['Salonname'];
    $massage=$_POST["Massagename"];
    $body=$_POST["bodyname"];
    $date=$_POST["Appointment_date"];
    $start=$_POST["Start_time"];
    $userID =  $_SESSION['User_ID'];

    $i_query= "INSERT into appointment (Salon_name, Massage_name, body_name, User_ID, Appointment_date, Start_time)
    VALUES ('$salon', '$massage', '$body', '$userID', '$date', '$start')"; 

    if (mysqli_query($mysqli, $i_query)) {
        header("Location: ../view/appointment_success.php");
        exit();
    } else {
        echo "Error: " . $i_query . "<br>" . mysqli_error($mysqli);
    }
}