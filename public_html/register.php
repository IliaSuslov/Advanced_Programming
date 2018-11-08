<?php
include_once "layout.php";
include_once "forms/register.php";
include_once "db.php";
include_once "query.php";

if ( ! session_id() ) @ session_start();
$link = get_db();

if ($_POST){
    echo(insert_user($_POST));
    $result = $link->query(
        insert_user($_POST)
    );
    $id = $link->insert_id;
    echo("\nid:" . $id);
    $result1 = mysqli_query($link,
        select_user_by_id($id)
    );
    print_r($result1);
    $user = $result1->fetch_assoc();

    $_SESSION["user_id"] =  $user["id"];
    $_SESSION["username"] =  $user["username"];
    header('Location: /');

} else {
    if (isset($_SESSION["user_id"])){
        header('Location: /');
    } else {
        echo(
            layout("Register new user",
                register_form()
            )
        );
    }
}
$link->close();
?>

