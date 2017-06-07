<?php 
include 'head.php';
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head utf-8>
	<title>Login</title>
	<link rel='stylesheet' type="text/css" href="index.css">
<body>


<div><h1 class="titletext">Sign in</h1></div>
<div class=signin_centerblock>
		<form id='form' action="checkconn.php" method="POST">
    <p> Don't have a account? <a herf="signup.php">Sign up</a></p>
  <div class="form-group">
    <label for="text">Email address</label>
    <input type="email" name="uid" class="form-control" id="" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="pwd" class="form-control" id="" placeholder="Password">
  </div>
    <label>
    <button type="submit" class="btn btn-default">Sign in</button>    </label>  
  </div>
</form>
</div>
</body>
</html>