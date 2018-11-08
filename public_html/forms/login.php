<?php
function login_form(){
    return <<<EOT
<form method="POST">
  <div class="form-group">
    <label for="Login">Login</label>
    <input type="text" class="form-control" id="Login" name="login" aria-describedby="loginHelp"  placeholder="Enter Login">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="password" aria-describedby="passwordHelp"  placeholder="Enter Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="register.php">register</a>
</form>
EOT;
}
?>