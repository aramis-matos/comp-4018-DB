<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$name = "has_open";



if (isset($_POST['insert'])) {

    $arr = $_POST;
    $arr = format_arr($arr, 'insert');

    if (!all_valid($arr)) {
        header("Location: ../signup_pages/$name.php?fail");
        exit();
    }

    insert($arr, $name, $conn);
    header("Location: ../signup_pages/$name.php?success");
}

else if (isset($_POST['view'])) {
    view($name, $conn);
}

else if (isset($_POST['modify'])) {
    $arr = $_POST;
    $arr = format_arr($arr, 'modify');

    if (!all_valid($arr)) {
        header("Location: ../signup_pages/$name.php?fail");
        exit();
    }


    $condition = "exam_id = " . $arr['old_exam_id'] . " AND open_id = " . $arr['old_open_id'];
    unset($arr['old_exam_id']);
    unset($arr['old_open_id']);
    update($name,$conn,$condition,$arr);
    header("Location: ../signup_pages/$name.php?success");
}