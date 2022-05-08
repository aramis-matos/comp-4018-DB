<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";


$coord_id = $_POST['coord_id'];
$problem_id = $_POST['problem_id'];

$arr = array($coord_id, $problem_id);



if (all_valid($arr)) {
    $query = "INSERT INTO crear_cons_mult (coord_id,problem_id) VALUES ( '$coord_id', '$problem_id')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/crear_cons_mult.php?signup_success");
}

else {
    die("Create open question failed, please fill all the fields");
}