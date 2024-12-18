<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 8</title>
</head>

<body>
    <?php

    session_start();

    $booksValue = $_GET['books'];

    require("biblioteca.php");

    $trovato = false;
    $writers = array();
    foreach ($libri as $libro) {
        if ($libro['copie'] > $booksValue) {
            array_push($writers, $libro['autore']);
            $trovato = true;
            }
        }
    if ($trovato) {
        echo '<h1>Quali sono gli autori con più di un certo numero di copie?</h1>';
        echo '<table border="1" cellspacing="0" cellpadding="2">';
        echo '<tr><th style="background-color:lavender">scrittore</th></tr>';
        foreach ($writers as $persona)
            echo '<tr><td align="center">'.$persona.'</td></tr>';
        echo '</table>';
        } else {
        echo 'Non sono presenti lettori che sono nati a '.$cityValue.' dopo l"anno '.$yearValue;
        }
    ?>
    <p><a href="query8.php">Ritorno nell'inserimento</a>
</body>

</html>