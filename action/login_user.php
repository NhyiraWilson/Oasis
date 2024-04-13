<?php
session_start();
include '../settings/core.php';
include_once '../settings/connection.php';

function findRoles($userRoleID) {
    if ($userRoleID==1) {
        header("Location: ../admin/admin_homepage.php");
        exit();
    }elseif ($userRoleID==2) {
        header("Location: ../view/home_page.php");
        exit();
    } else {
        echo 'Access denied';
        exit();
    }
}

if (isset($_POST['submit'])) {

    $username=$_POST["Username"];
    $password=$_POST["Passwords"];
    $s_query = "SELECT * from users WHERE Email='$username'";
    $result = $mysqli->query($s_query);


    if ($result->num_rows > 0) {
        $check_login = mysqli_fetch_assoc($result);
        if(password_verify($password, $check_login['Passwords'])){
            // session_start();
            $_SESSION['User_ID']=$check_login['User_ID'];
            $_SESSION['user_role']=$check_login['Role_ID'];

            header("Location: ../view/home.php");

            echo "verified";
        }else{
            echo "failed to verify";
        }
    } else {
        return[];
    }
    $mysqli->close();
}
?>