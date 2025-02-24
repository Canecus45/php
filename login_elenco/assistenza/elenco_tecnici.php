<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Elenco tecnici</title>
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

    // query per verificare credenziali in database
    $query = "SELECT * FROM tecnici";

    //prima di procedere verificare al correttenzza della query tramite echo($sql)
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        echo "Non è presente nessun tecnico";
        } else {
        echo "<table class='table table-bordered'> <tr><td>Matricola</td><td>Congome</td><td>Nome</td><Tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td><a href=interventi.php?matricola={$row['matricola']}>{$row['matricola']}</td><td>{$row['cognome']}</td><td>{$row['nome']}</td></tr>";
            }
        echo "</table>";

        }
    ?>
</body>

</html>