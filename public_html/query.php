<?php
//-----------
// TASKS
//-----------
function select_tasks($userId){
    return <<<EOT
select * from tasks where owner=$userId;
EOT;

}

function select_all_tasks(){
    return <<<EOT
select tasks.*, users.username as username from tasks, users where users.id=tasks.owner;
EOT;

}


function select_task_by_id($id){
    return <<<EOT
select * from tasks where id=$id;
EOT;

}

function update_task($task){
    return <<<EOT
UPDATE `tasks` 
SET `title`="$task->title", `body`="$task->body", `status`="$task->status"
WHERE id = $task->id;
EOT;

}

function insert_task($task){
    return <<<EOT
INSERT INTO `tasks` (`title`, `body`, `status`,`owner`) 
VALUES ("$task->title", "$task->body", $task->status, $task->owner);
EOT;

}


function delete_task($id){
    return <<<EOT
DELETE FROM  `tasks` WHERE id=$id    ;
EOT;

}

//-----------
// USERS
//-----------

function select_user($login){
    return "select * from users where `login`=\"" . $login . "\";";
}

function select_user_by_id($id){
    return "select * from users where `id`=" . $id . ";";
}


function insert_user($user){
    $username = $user["username"];
    $login = $user["login"];
    $password = $user["password"];
    $phone = $user["phone"];
    $address = $user["address"];

    return <<<EOT
INSERT INTO `users` 
  (`username`, `login`, `password`, `phone`, `address`) 
VALUES 
  ("$username", "$login", "$password", "$phone", "$address");
EOT;

}
