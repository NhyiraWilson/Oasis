<?php
session_start();

unset( $_SESSION['User_ID']);
unset( $_SESSION['Role_ID']);

header("Location: ../login/login.php");

exit();