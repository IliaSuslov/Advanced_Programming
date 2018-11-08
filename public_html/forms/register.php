<?php
function register_form(){
    return <<<EOT
<form method="POST">
  <div class="form-group">
    <label for="UserName">User Name</label>
    <input type="text" class="form-control" id="UserName" name="username" aria-describedby="userHelp" placeholder="Enter User Name">
  </div>
  <div class="form-group">
    <label for="Login">Login</label>
    <input type="text" class="form-control" id="Login" name="login" aria-describedby="loginHelp"  placeholder="Enter Login">
  </div>
  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="password" aria-describedby="passwordHelp"  placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="Password1" name="password1" aria-describedby="password1Help"  placeholder="Enter Password again">
  </div>
  <div class="form-group">
    <label for="Phone">Phone</label>
    <input type="number" class="form-control" id="Phone" name="phone" aria-describedby="phoneHelp"  placeholder="Enter Phone">
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input type="address" class="form-control" id="Address" name="address" aria-describedby="addressHelp" id="Login" placeholder="Enter Address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
EOT;
}
?>