<?php
include_once "layout.php";
include_once "forms/login.php";
include_once "db.php";
include_once "tasks.php";
include_once "query.php";

if ( ! session_id() ) @ session_start();
$link = get_db();

if ($_POST){
    // post login
    $result = mysqli_query($link,
        select_user($_POST['login'])
    );
    $user = $result->fetch_assoc();
    // set user_id & username
    if($_POST["password"] == $user["password"]){
        $_SESSION["user_id"] =  $user["id"];
        $_SESSION["username"] =  $user["username"];
    }
}

if(isset($_SESSION["user_id"])){
    //tasks
    $result = mysqli_query($link,
        select_tasks($_SESSION["user_id"])
    );
//    $arr = $result->fetch_object();
//    print_r($arr);
    echo(
        layout("Tasks",
            tasks_table($result)
        )
    );
}else{
    // login
    echo(
        layout("Login",
            login_form()
        )
    );
}

$link->close();
?>