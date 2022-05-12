<?php

include_once "dbh.inc.php";
include_once "verify_entries.php";

$name = "team";



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
    // view($name, $conn);

    $query = "SELECT * FROM $name;";
    $result = mysqli_query($conn, $query);
    $result_num = mysqli_num_rows($result);
    if ($result_num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $query = "SELECT university.name FROM university WHERE university.id = " . $row['uni_id'];
            $new_result = mysqli_query($conn,$query);
            echo "Team Name: " . mysqli_fetch_assoc($new_result)['name'] . "_" . $row['est_1'] . $row['est_2'] . $row['est_3'] . "_" . date('Y', strtotime($row['year_participated'])) . " ";
            foreach ($row as $key => $val) {
                echo "$key: $val ";
            }
            echo "<br>";
        }
    }
}

else if (isset($_POST['modify'])) {
    $arr = $_POST;
    $arr = format_arr($arr, 'modify');

    if (!all_valid($arr)) {
        header("Location: ../signup_pages/$name.php?fail");
        exit();
    }
    $condition = "id = " . $arr['id'];
    update($name,$conn,$condition,$arr);
    header("Location: ../signup_pages/$name.php?success");
}