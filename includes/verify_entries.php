<?php

function all_valid($arr) {
    foreach ($arr as $val) {
        if ($val == "" || $val == NULL)
        {
            return false;
        }
    }
    return true;
}