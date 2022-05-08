<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$description = $_POST['description'];
$real_ans = $_POST['real_ans'];



if ($description && $real_ans) {
    $query = "INSERT INTO cons_mult (description,real_ans) VALUES ('$description', '$real_ans')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/cons_mult.php?signup_success");
}

else {
    die("Open question entry failed, please fill all the fields");
}