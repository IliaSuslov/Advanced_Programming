<?php
include_once "layout.php";
include_once "forms/task.php";
include_once "db.php";
include_once "query.php";

if ( ! session_id() ) @ session_start();
if (!isset($_SESSION["user_id"])){
    include '401.php';
    // header('Location: /',true, 401);
    exit();
}

$link = get_db();
$id = $_GET["id"];
$allow = false;

//task
if($id == "new"){
    $allow = true;
    $task = (object)array(
        "status" => 1,
        "owner" => $_SESSION["user_id"],
        "body" => "",
        "title" =>""
    );
}else{
    $result = mysqli_query($link, select_task_by_id($id));
    $task = $result->fetch_object();
    if($task->owner == $_SESSION["user_id"]) {
        $allow = true;
    }
}


// user
$result1 = mysqli_query($link, select_user_by_id($_SESSION["user_id"]));
$user = $result1->fetch_object();
if ($user->group == 1 || $user->group == 3){
    $allow = true;
}

if(!$allow){
    include '401.php';
    // header('Location: /',true, 401);
    $link->close();
    exit();
}

if ($_POST){
    $status = 0;
    if (isset($_POST["status"])){
        $status = $_POST["status"];
    }
    if ($id == "new"){
        $task = (object)array(
            "title" => $_POST["title"],
            "body" => $_POST["body"],
            "status" => $status,
            "owner" => $_SESSION["user_id"],
        );
        $query = insert_task($task);
    } else {
        $task = (object)array(
            "id" => $id,
            "title" => $_POST["title"],
            "body" => $_POST["body"],
            "status" => $status,
            "owner" => $_SESSION["user_id"],
        );
        $query = update_task($task);
    }
    echo($query);
    $result = mysqli_query($link, $query);
    header('Location: /');

} else {
    echo(
        layout("Task",
            task_form($task)
        )
    );
}

$link->close();
?>