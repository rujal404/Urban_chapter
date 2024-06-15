<?php
session_start();
include "dbconn.php";

if ($_SESSION($_POST0['adB'])) {

    $bid = $_POST["bid"];
    $qty = $_POST["qty"];
    $qty += 1;

    $sql = "UPDATE books
    SET quantity='$qty'
    WHERE bid='$bid'";

    if ($conn->query($sql)) {
        echo "<script>alert('Success!!!!'); </script>";
        header("Location: books.php");
    } else {
        echo "Something went wrong!!!" . $_conn->error;
    }
} else if (isset($_POST['rmBB'])) {

}