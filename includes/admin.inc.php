<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

if (isset($_POST['insert'])) {

    $name = $_POST['name_insert'];
    $email = $_POST['email_insert'];
    $pos = $_POST['position_insert'];
    $uni_id = $_POST['uni_id_insert'];
    
    $arr = array('name' => "'$name'", 'email' => "'$email'", 'position' => "'$pos'", 'uni_id' => $uni_id);

    if (!all_valid($arr)) {
        header("Location: ../signup_pages/admin.php?fail");
        exit("Not all entries valid");
    }

    insert($arr, 'admin', $conn);
    header("Location: ../signup_pages/admin.php?success");
    
}

else if (isset($_POST['view'])) {
    view('admin',$conn);
}