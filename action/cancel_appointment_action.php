<?php
include_once '../settings/connection.php';
include '../admin/appointment_admin.php';

if(isset($_GET['delid'])) {
    $id=$_GET['delid'];
    $sql="DELETE FROM appointment WHERE Appointment_ID = '$id'"; 

    if (mysqli_query($mysqli, $sql)) {
        echo "Record deleted successfully";
        header('Location: ../admin/appointment_admin.php');
        
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($mysqli);
    }

    } else {
    header('Location: ../admin/appointment_admin.php');
    }
    mysqli_close($mysqli);
?>
