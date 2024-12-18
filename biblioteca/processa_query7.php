<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa Query 7</title>
</head>

<body>
    <?php

    session_start();

    $cityValue = $_GET['city'];
    $yearValue = $_GET['year'];

    require("biblioteca.php");

    $trovato = false;
    $readers = array();
    foreach ($lettori as $lettore) {
        if ($lettore['citta'] == $cityValue and $yearValue <= $lettore['nascita']) {
            $readers = array_merge($readers, array($lettore['nome']));
            $trovato = true;
            }
        }
    if ($trovato) {
        echo '<h1>Quali sono i lettori di una certa città nati dopo un certo anno?</h1>';
        echo 'Ecco i lettori che sono nati a '.$cityValue.' dopo l"anno '.$yearValue;
        echo '<table border="1" cellspacing="0" cellpadding="2">';
        echo '<tr><th style="background-color:lavender">lettore</th></tr>';
        foreach ($readers as $persona)
            echo '<tr><td align="center">'.$persona.'</td></tr>';
        echo '</table>';
        } else {
        echo 'Non sono presenti lettori che sono nati a '.$cityValue.' dopo l"anno '.$yearValue;
        }
    ?>
    <p><a href="query7.php">Ritorno nell'inserimento</a>
</body>

</html>