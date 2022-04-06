<?php
    $Username = $_GET["Username"];
    $Password = $_GET["Password"];
    if (($Username != 'Ciccio') || ($Password != 'Palermo')) 
        echo 'Credenziali errate';
     else 
        echo 'Benvenuto '.$Username.' ';
?>