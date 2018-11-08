<?php
include_once "db.php";

function new_task(){
    return <<<EOT
<a class="btn btn-success" href="task.php?id=new">New</a>
EOT;
}

function row_task($task){
    return <<<EOT
<tr>
    <td>
        <a class="btn btn-info" href="task.php?id=$task->id">Edit</a>    
    </td>
    <td>$task->title</td>
    <td>$task->status</td>
    <td>
        <a class="btn btn-danger" href="task_remove.php?id=$task->id">Delete</a>    
    </td>
</tr>
EOT;

}

function table_header(){
    $new_task = new_task();
    return <<<EOT
<thead>
    <th>$new_task</th>
    <th>Title</th>
    <th>Status</th>
    <th></th>
</thead>
EOT;

}


function tasks_table( $result ){
    $rows = "";
    while ($row = $result->fetch_object()) {
        $rows = $rows . row_task($row);
    }
    return "<table class='table table-bordered'><tbody>"
        .table_header()
        . $rows
        . "</tbody></table>";
}

function row_task_all($task){
    return <<<EOT
<tr>
    <td>
        <a class="btn btn-info" href="task.php?id=$task->id">Edit</a>    
    </td>
    <td>$task->title</td>
    <td>$task->status</td>
    <td>$task->username</td>
    <td>
        <a class="btn btn-danger" href="task_remove.php?id=$task->id">Delete</a>    
    </td>
</tr>
EOT;

}


function tasks_table_all( $result ){
    $rows = "";
    while ($row = $result->fetch_object()) {
        $rows = $rows . row_task_all($row);
    }
    return "<table class='table table-bordered'><tbody>"
        . "<thead>
            <th></th>
            <th>Title</th>
            <th>Status</th>
            <th>Owner</th>
            <th></th>
        </thead>"
        . $rows
        . "</tbody></table>";
}

?>