<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$coordinator_name = $_POST['coordinator_name'];
$uni_country = $_POST['uni_country'];
$uni_id = $_POST['uni_id'];

$arr = array($coordinator_name, $uni_country, $uni_id);



if (all_valid($arr)) {
    $query = "INSERT INTO coordinador (nombre,uni_country,uni_id) VALUES ('$coordinator_name', '$uni_country', '$uni_id')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/coordinador.php?signup_success");
}

else {
    die("Coordinator signup failed, please fill all the fields");
}