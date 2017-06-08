<?php

session_start(); //Session start för att komma ihåg id 
unset($_SESSION); //Avsätter session
session_destroy(); //Förstör sessionen och tappar minnet för id.
session_write_close(); //Här stänger vi sessionen 
header('Location: /webserverprog/login/'); // När sessionen är stängd och förstörd återgår vi till indexfilen.
die; //Php scriptet avslutas
?>