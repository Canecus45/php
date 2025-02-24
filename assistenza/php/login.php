<?php
// connessione al database
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "assistenza";
$conn = new mysqli($hostname, $username, $password, $dbname);

//controllo di avvenuta connessione
if ($conn->connect_error)
    die ("Errore di comprensione");

//recupero e assegna a due variabili username e password inviate dalla pagina login.html
$username = $_POST["username"];
$password = $_POST["password"];

//$passwordCrit = crypt($password, 'abcpaludiglo321');

// Query per verificare le credenziali nel database
$sql = "SELECT username, password FROM clienti WHERE username = '{$username}' AND password = '{$password}'"; 

//non implementata la crittografia

//prima di procedere verificare la correttezza sintattica del comando assegnato alla variabile $sql con echo ($sql)
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Credenziali valide
    //Reindirizzamento alla pagina di benvenuto
    header("Location: welcome.php");
    exit();
} else {
    //Visualizza un messaggio di errore se le credenziali non sono valide
    echo "Username e/o password non corretti";
}
