<?php

function get_db(){
    // $host = "127.0.0.1";
    $host = "sql201.epizy.com";
    // $user = "root";
    $user = "epiz_22664611";
    // $pass = "";
    $pass = "BIRwxL1St1SK";
    // $db = "da";
    $db = "epiz_22664611_da";

    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_errno) {
        die('Ошибка подключения (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
    return $mysqli;
}
?>