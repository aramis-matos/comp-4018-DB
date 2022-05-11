<?php

function all_valid($arr) {
    foreach ($arr as $key => $val) {
        if(!$key)
            return false;
    }
    return true;
}

function insert ($arr, $table, $conn) {
    $query = "INSERT INTO $table (";
    $attributes = "";
    $values = "";

    foreach ($arr as $key => $val) {
        $attributes .= "$key,";
        $values .= "$val,";
    }
    
    $query .= rtrim($attributes,',') .") VALUES (" . rtrim($values,",") .")";
    mysqli_query($conn, $query);
    return true;
}

