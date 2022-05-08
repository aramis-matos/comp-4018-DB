<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$ans = $_POST['ans'];
$problem_id = $_POST['problem_id'];

$arr = array($ans, $problem_id);



if (all_valid($arr)) {
    $query = "INSERT INTO possible_ans (ans, problem_id) VALUES ('$ans', '$problem_id')";
    mysqli_query($conn, $query);
    header("Location: ../signup_pages/possible_ans.php?signup_success");
}

else {
    die("Possible answer input failed, please enter a name");
}