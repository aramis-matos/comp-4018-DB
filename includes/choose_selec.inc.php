<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";


$name = "choose_selec";


if (isset($_POST['insert'])) {
    if (!all_valid($_POST)) {
        header("Location: ../signup_pages/$name.php?fail");
        exit();
    }

    $admin_id = $_POST['admin_id_insert'];
    $selec_id = $_POST['selec_id_insert'];

    $arr = array('admin_id' => $admin_id, 'selec_id' => $selec_id);

    insert($arr, $name, $conn);
    header("Location: ../signup_pages/$name.php?success");
}

else if (isset($_POST['view'])) {
    view($name, $conn);
}

else if (isset($_POST['modify'])) {
    if (!all_valid($_POST)) {
        header("Location: ../signup_pages/$name.php?fail");
        exit();
    }

    $admin_id = $_POST['admin_id_modify'];
    $selec_id = $_POST['selec_id_modify'];
    $new_admin_id = $_POST['new_admin_id_modify'];
    $new_selec_id = $_POST['new_selec_id_modify'];

    $condition = "admin_id = $admin_id AND selec_id = $selec_id";


    $arr = array('admin_id' => $new_admin_id, 'selec_id' => $new_selec_id);

    update($name,$conn,$condition,$arr);
    header("Location: ../signup_pages/$name.php?success");
}