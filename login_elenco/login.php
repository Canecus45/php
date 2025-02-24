<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    // connessione al database
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "assistenza";
    $conn = new mysqli($hostname, $username, $password, $dbname);
    // controllo di avvenuta connessione
    if ($conn->connect_error)
        die("errore di connessione");
    // recupero e assegna di due variabili uname e pwd inviatae nella pagina di login
    $username = $_POST['username'];
    $password = $_POST['password'];
    // query per verificare credenziali in database
    $sql = "SELECT * FROM clienti WHERE username= '{$username}' AND password='{$password}'";
    //prima di procedere verificare al correttenzza della query tramite echo($sql)
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // credenziali valide
        // reindirizzamento a una pagina di benvenuto
        header("Location: welcom.php");
        exit();
        } else {
        // si fa visualizzare un messaggio d'errore
        echo ("username e/o password sono errati");
        }
    ?>
</body>

</html>