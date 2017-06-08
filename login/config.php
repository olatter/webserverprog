<?php //Kommer åt databasen
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname); //kollar koppling

if ($conn->connect_error) { //Ger felmeddelande
   die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>