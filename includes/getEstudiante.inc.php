<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$nombre_estudiante = $_POST['student_name'];
$student_team_id = $_POST['student_team_id'];

$arr = array($nombre_estudiante, $student_team_id);



if (all_valid($arr)) {
    $query = "INSERT INTO estudiante (nombre, team_id) VALUES ('$nombre_estudiante', '$student_team_id')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/estudiante.php?signup_success");
}

else {
    die("Student signup failed, please enter a name");
}