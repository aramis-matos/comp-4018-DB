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

function update ($name, $conn, $condition, $arr) {
    $query = "SELECT * FROM $name WHERE $condition;";
    $result = mysqli_query($conn, $query);
    $result_num = mysqli_num_rows($result);
    if ($result_num == 1) {
        $query = "UPDATE $name SET ";
        $attributes = "";

        foreach ($arr as $key => $val) {
            $attributes .= "$key = $val,";
        }

        $query .= rtrim($attributes,',') . " WHERE $condition";
        mysqli_query($conn, $query);
        return true;
    }
    exit("Zero or greater than 1 results found");
    return false;
}

