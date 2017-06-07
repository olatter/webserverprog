<?php
session_start();
include 'head.php';
include 'config.php';
 
//include 'connect.php';
 
$username = $_POST['uid'];
password($password = $_POST['pwd']);
 
$query = "SELECT * FROM user WHERE uid = '$uid' AND pwd = '$pwd'";
$result = mysqli_query($connection, $query);
 
if (!$row = mysqli_fetch_assoc($result)) {
                           echo "Wrong username or password!";
} else {
                           $_SESSION['id'] = $row['id'];
                        
}
 
?>