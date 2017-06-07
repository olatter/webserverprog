<?php 
session_start();

include 'config.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$query = "SELECT * FROM user WHERE uid = '$uid' AND '$pwd'";
$result = mysqli_query($conn, $query);

if (!$row = mysqli_fetch_assoc($result)) {
				echo "Wrong username or password";
} else {
	$_SESSION['id']=$row['id'];
	$_SESSION['name'] = $row['firstname']. ' ' . $row['lastname'];
				header("Location: todo.php");
}
?>