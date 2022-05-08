<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$selec_id = $_POST['selec_id'];
$team_id = $_POST['team_id'];
$ans = $_POST['ans'];

$arr = array($selec_id, $team_id, $ans);



if (all_valid($arr)) {
    $query = "INSERT INTO contestar_selec (selec_id,team_id,ans) VALUES ('$selec_id', '$team_id', '$ans')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/contestar_selec.php?signup_success");
}

else {
    die("Open question answer entry failed, please fill all the fields");
}