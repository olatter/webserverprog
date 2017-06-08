<?php
session_start();
include 'head.php';
include 'config.php';
if(!isset($_SESSION['id'])) { header('Location: /webserverprog/login/'); }

echo "Välkommen";

?>
<br>
 <a href="logout.php">Logga ut</a> 

