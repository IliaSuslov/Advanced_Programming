<?php
include_once "layout.php";
include_once "forms/login.php";
include_once "db.php";
include_once "query.php";

if ( ! session_id() ) @ session_start();
if (!isset($_SESSION["user_id"])){
    include '401.php';
    // header('Location: /',true, 401);
    exit();
}
$id = $_GET["id"];

$allow = false;
$link = get_db();
$result = mysqli_query($link, select_task_by_id($id));
$task = $result->fetch_object();
if($task->owner == $_SESSION["user_id"]) {
    $allow = true;
}

if(!$allow){
    include '401.php';
    // header('Location: /',true, 401);
    $link->close();
    exit();
}


$result = mysqli_query($link, delete_task($id));
echo("deleted");
header('Refresh: 1; /');
$link->close();
?>