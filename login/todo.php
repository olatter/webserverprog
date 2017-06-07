<?php
session_start();
if(!isset($_SESSION['id'])) { header('Location: index.html'); }



echo "Välkommen du är nu inloggad!"

?>
<br>
 <a href="logout.php">Logga ut</a>

