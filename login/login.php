<?php
session_start(); //Session starts and the user id saved in the memory.
include 'head.php'; //Here i include the other files for exaple the head.php there i have the code for bootsrap and config.php there i have saved the info and login files for database connection. 
include 'config.php';
 
//include 'connect.php';
 
$username = filter_input(INPUT_POST['uid']); // Från början använde jag enbart POST funktionen, men jag bytte ut till INPUT_POST för att säkra upp sedan även filter_input för att säkra upp detta ännu en gång. sedan skapade jag även en variabel för username.
password($password = filter_input(INPUT_POST['pwd'])); //Jag säkrade upp lösenordsfunktionaliten med att ange den inbyggda funtionen password sedan skapade jag en variabel, lika här där jag först hade enbart POST funktioen men jag bytte ut mot INPUT_POST och sedan även filter_input.
 
$query = "SELECT * FROM user WHERE uid = '$uid' AND pwd = '$pwd'"; //Gör en query för att anropa databasen och dess tabeller och kolumner. 
$result = mysqli_query($connection, $query); //Jag ser om jag kan få ut ett resultat av mina två variabler. 
 
if (!$row = mysqli_fetch_assoc($result)) { //Här testar jag om personen som loggar in skriver in fel lösenord eller användarnam så får personen ett felmeddelande eller så loggas man in. 
                           echo "Wrong username or password!";
} else {
                           $_SESSION['id'] = $row['id']; //SESSION för att komma ihåg använaren. 
                           $_SESSION['firstname'];
                        
}
 
?>