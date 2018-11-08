<?php
function select_options($val){
  $options = "<option ";
  if ($val=="0") {
    $options .=  "selected";
  }
  $options .= " value=\"0\" >Failed</option>";

  $options .= "<option ";
  if ($val=="1") {
    $options .= "selected";
  }
  $options .= " value=\"1\" >In Progress</option>";

  $options .= "<option ";
  if ($val=="2") {
    $options .= "selected";
  }
  $options .= " value=\"2\" >Complete</option>";
  return $options;
}

function task_form($task){
    if(!isset($task)){
        $task = (object)array(
            status => 1,
            status => 1,
            body => ""
        );
    }
    $options = select_options($task->status);

    return <<<EOT
<form method="POST">
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="$task->title">
  </div>
  <div class="form-group">
    <label for="Body">Body</label>
    <textarea class="form-control" name="body" id="Body" rows="4">$task->body</textarea>
  </div>
  <div class="form-group">
    <label for="Status">Status</label>
    <select name="status">$options</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
EOT;
}

?>