<?php
session_start();
include_once "dbconn.php";

if ($_POST) {

    $un = $_POST['uname'];
    $pass = $_POST['pass'];
    $_SESSION["aun"] = $un;

    $sql = "SELECT * FROM admin WHERE usrname='$un' AND passwords='$pass'";
    $res = $conn->query($sql);

    $sql = "SELECT * FROM admins WHERE usrname='$un' AND passwords='$pass'";
    $res =$conn->query($sql);

    if ($res->num_rows > 0) {
        // echo "Login success!";
        $_SESSION["adlogged"] = true;
        header("Location: adminDashboard.php");
    } else {
        session_unset();
        session_destroy();
        echo "there is an error" . $conn->error;
    }
}