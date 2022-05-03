<?php

include_once "dbh.inc.php";

$nombre_estudiante = $_POST['student_name'];

if ($nombre_estudiante) {
    $query = "INSERT INTO estudiante (nombre) VALUES ('$nombre_estudiante')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/estudiante.php?signup_success");
}

else {
    die("Student signup failed, please enter a name");
}