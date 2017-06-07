<?php 
include 'config.php';
include 'head.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql ="INSERT INTO user WHERE uid = '$uid' AND pass = '$pwd'";
?>

<!DOCTYPE html>
<html>
<head utf-8>
  <title>Sign up</title>
  <link rel='stylesheet' type="text/css" href="index.css">
<body>


<div><h1 class="titletext">Sign up</h1></div>
<div class=signup_centerblock>
    <form id='signup_form' method="POST">
    <p> Already have account? <a herf="login.php">Sign in</a></p>
  <div class="form-group">
     <label for="text">Email address</label>
    <input type="text" name="uid" class="form-control" id="" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="pwd" class="form-control" id="" placeholder="Password">
  
  </div>
    <label>
    <button type="submit" class="btn btn-default">Sign up</button>    </label>
  </div>
</form>
</div>
</body>
</html>