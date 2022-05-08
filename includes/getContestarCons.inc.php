<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$cons_id = $_POST['cons_id'];
$team_id = $_POST['team_id'];
$ans = $_POST['ans'];

$arr = array($cons_id, $team_id, $ans);



if (all_valid($arr)) {
    $query = "INSERT INTO contestar_cons (cons_id,team_id,ans) VALUES ('$cons_id', '$team_id', '$ans')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/contestar_cons.php?signup_success");
}

else {
    die("Open question answer entry failed, please fill all the fields");
}