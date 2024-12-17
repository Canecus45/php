<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiedi lettore</title>
</head>

<body>
    <?php

    session_start();

    $regValue = $_GET['regName'];

    require("biblioteca.php");

    $trovato = false;

    foreach ($prestiti as $prestito) {
        if ($prestito['lettore'] == "$regValue") {
            $trovato = true;
            }
        }
    if ($trovato) {
        echo '<h1>Quali sono i libri in prestito a '.$regValue.'</h1>';
        echo '<table border="1" cellspacing="0" cellpadding="2">';
        echo '<tr><th style="background-color:lavender">libro</th></tr>';
        foreach ($prestiti as $prestito) {
            if ($prestito['lettore'] == "$regValue") {
                echo '<tr><td align="center">'.$prestito['libro'].'</td></tr>';
                }
            }
        } else {
        echo 'Ci dispiace però non è presente nessun lettore con il nome: '.$regValue;
        }
    echo '</table>'; ?>

    <p><a href="query5.php">Ritorno nell'inserimento</a>
</body>

</html>