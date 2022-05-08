<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$description = $_POST['descrip'];
$real_ans = $_POST['real_ans'];

$arr = array($description, $real_ans);



if (all_valid($arr)) {
    $query = "INSERT INTO selec_mult (description, real_ans) VALUES ('$description', '$real_ans')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/selec_mult.php?signup_success");
}

else {
    die("Multiple choice input failed, please enter a name");
}