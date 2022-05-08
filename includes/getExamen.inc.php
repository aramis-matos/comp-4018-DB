<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$id = $_POST['id'];
$admin_id = $_POST['admin_id'];
$selec_mult_id1 = $_POST['selec_mult_id1'];
$selec_mult_id2 = $_POST['selec_mult_id2'];
$selec_mult_id3 = $_POST['selec_mult_id3'];
$selec_mult_id4 = $_POST['selec_mult_id4'];
$selec_mult_id5 = $_POST['selec_mult_id5'];
$selec_mult_id6 = $_POST['selec_mult_id6'];
$selec_mult_id7 = $_POST['selec_mult_id7'];
$selec_mult_id8 = $_POST['selec_mult_id8'];
$cons_mult_id1 = $_POST['cons_mult_id_1'];
$cons_mult_id2 = $_POST['cons_mult_id_2'];
$cons_mult_id3 = $_POST['cons_mult_id_3'];
$cons_mult_id4 = $_POST['cons_mult_id_4'];



$arr = array($id, $admin_id, $selec_mult_id1, $selec_mult_id2, $selec_mult_id3, $selec_mult_id4, $selec_mult_id5, $selec_mult_id6, $selec_mult_id7, $selec_mult_id8, $cons_mult_id1, $cons_mult_id2, $cons_mult_id3, $cons_mult_id4);



if (all_valid($arr)) {
    $query = "INSERT INTO examen (id,admin_id,selec_mult_id,selec_mult_id_1,selec_mult_id_2,selec_mult_id_3,selec_mult_id_4,selec_mult_id_5,selec_mult_id_6,selec_mult_id_7,cons_mult_id, cons_mult_id_1,cons_mult_id_2,cons_mult_id_3) VALUES ('$id', '$admin_id', '$selec_mult_id1', '$selec_mult_id2', '$selec_mult_id3', '$selec_mult_id4', '$selec_mult_id5', '$selec_mult_id6', '$selec_mult_id7', '$selec_mult_id8','$cons_mult_id1', '$cons_mult_id2', '$cons_mult_id3', '$cons_mult_id4')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/examen.php?signup_success");
}

else {
    die("Exam enlistment failed, please enter a name");
}