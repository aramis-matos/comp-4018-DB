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

function view ($name, $conn) {
    $query = "SELECT * FROM $name;";
    $result = mysqli_query($conn, $query);
    $result_num = mysqli_num_rows($result);
    if ($result_num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            foreach ($row as $key => $val) {
                echo "$key: $val ";
            }
            echo "<br>";
        }
    }
}

function update ($name, $conn, $id_val, $id_name, $arr) {
    $query = "SELECT * FROM $name WHERE $id_name = $id_val;";
    $result = mysqli_query($conn, $query);
    $result_num = mysqli_num_rows($result);
    if ($result_num == 1) {
        $query = "UPDATE $name SET ";
        $attributes = "";

        foreach ($arr as $key => $val) {
            $attributes .= "$key = $val,";
        }

        $query .= rtrim($attributes,',') . " WHERE $id_name = $id_val";

        mysqli_query($conn, $query);
        return true;
    }
    return false;
}

