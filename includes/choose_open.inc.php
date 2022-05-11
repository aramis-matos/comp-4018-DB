<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

if (isset($_POST['insert'])) {
    $admin_id = $_POST['admin_id_insert'];
    $open_id = $_POST['open_id_insert'];
    $arr = array('admin_id' => $admin_id, 'open_id' => $open_id);

    if (!all_valid($arr)) {
        header("Location: ../signup_pages/choose_open.php?fail");
        exit("Not all entries valid");
    }

    insert($arr,'choose_open',$conn);
    header("Location: ../signup_pages/choose_open.php?success");

} else if (isset($_POST['view'])) {
    view('choose_open', $conn);
} else if (isset($_POST['modify'])) {
    $admin_id = $_POST['admin_id_modify'];
    $open_id = $_POST['open_id_modify'];
    $new_admin_id = $_POST['new_admin_id_modify'];
    $new_open_id = $_POST['new_open_id_modify'];
    $arr = array('admin_id' => $new_admin_id, 'open_id' => $new_open_id);

    if (!all_valid($_POST)) {
        header("Location: ../signup_pages/choose_open.php?fail");
        exit("Not all entries valid");
    }

    update('choose_open', $conn, "admin_id = $admin_id AND open_id = $open_id",$arr);
    header("Location: ../signup_pages/choose_open.php?success");   
}
