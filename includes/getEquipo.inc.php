<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";


$coordinador_id = $_POST['coordinador_id'];
$est_1_id = $_POST['est_1_id'];
$est_2_id = $_POST['est_2_id'];
$est_3_id = $_POST['est_3_id'];

$arr = array($coordinador_id, $est_1_id, $est_2_id, $est_3_id);



if (all_valid($arr)) {
    $query = "INSERT INTO equipo (coordinador_id, est_1_id, est_2_id ,est_3_id) VALUES ( '$coordinador_id', '$est_1_id', '$est_2_id', '$est_3_id')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/equipo.php?signup_success");
}

else {
    die("Team creation failed, please fill all the fields");
}