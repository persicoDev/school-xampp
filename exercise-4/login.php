<?php
    $user=$_POST['user'];
    $email=$_POST['email'];
    $sesso=$_POST['sesso'];
    $passione = $_POST['passione'];
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'login_form';
    
    //connessione al server SQL
    $conn=mysqli_connect($hostname, $username, $password, $dbname);
    if(!$conn){
        die('errore nella connessione');
        exit();
    }

    //recupera i dati dal form html
    $query = mysqli_query($conn, "INSERT INTO users (user, email, sesso, passione) VALUES ('{$user}', '{$email}', '{$sesso}', '{$passione}')");

    if (!$query){
        echo "errore commando!";
        exit();
    }
    
    //chiusura connessione
    mysqli_close($conn);
?>