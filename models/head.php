<?php
include_once '../models/dbConnection.php';
$ref = @$_GET['q'];
$email = $_POST['uname'];
$password = $_POST['password'];


$result = mysqli_query($con, "SELECT email FROM admin WHERE email = '$email' and password = '$password' and role = 'head'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    session_start();
    if (isset($_SESSION['email'])) {
        session_unset();
    }
    $_SESSION["name"] = 'Admin';
    $_SESSION["key"] = 'AD';
    $_SESSION["email"] = $email;
    header("location:../views/headdash.php?q=0");
} else header("location:../index.php?w=Warning : Access denied");
