<?php
include_once "layout.php";
include_once "forms/login.php";
include_once "db.php";
include_once "tasks.php";
include_once "query.php";

if ( ! session_id() ) @ session_start();
if (!isset($_SESSION["user_id"])){
    include '401.php';
    // header('Location: /',true, 401);
    exit();
}
$link = get_db();
$result = mysqli_query($link,
    select_all_tasks()
);
echo(
    layout("Tasks",
        tasks_table_all($result)
    )
);

$link->close();
?>