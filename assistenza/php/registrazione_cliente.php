<?php
include('assistenza.sql');

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];

// Query per verificare le credenziali nel database
$sql = "INSERT INTO clienti (nome, cognome, username, password, email, telefono) VALUES ('{$nome}', '{$cognome}', '{$username}', '{$password}', '{$email}', '{$telefono}' )" ; 

//prima di procedere verificare la correttezza sintattica del comando assegnato alla variabile $sql con echo ($sql)
/*$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Credenziali valide
    //Reindirizzamento alla pagina di benvenuto
    header("Location: welcome.php");
    exit();
} else {
    //Visualizza un messaggio di errore se le credenziali non sono valide
    echo "Username e/o password non corretti";
}*/