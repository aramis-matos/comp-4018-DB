<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$admin_name = $_POST['admin_name'];


if ($admin_name) {
    $query = "INSERT INTO admin (name) VALUES ('$admin_name')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/administrador.php?signup_success");
}

else {
    die("Admin signup failed, please enter a name");
}