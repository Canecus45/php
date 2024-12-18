<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 6</title>
</head>

<body>
    <?php

    session_start();

    $minValue = $_GET['minYear'];
    $maxValue = $_GET['maxYear'];

    if ($maxValue < $minValue) {
        echo 'Ci dispiace però le date inserite sono sbagliate';
        } else {
        require('biblioteca.php');
        echo '<h1>Here the books with the x:y period:</h1>';
        echo '<table border="1" cellspacing="0" cellpadding="2">';
        echo '<tr><th style="background-color:lavender">titolo</th>';
        echo '<th style="background-color:lavender">autore</th>';
        echo '<th style="background-color:lavender">anno</th></tr>';
        foreach ($libri as $libro) {
            if ($libro['anno'] > $minValue and $libro['anno'] < $maxValue) {
                echo '<tr>';
                echo '<td align="center">'.$libro['titolo'].'</td>';
                echo '<td align="center">'.$libro['autore'].'</td>';
                echo '<td align="center">'.$libro['anno'].'</td>';
                echo '</tr>';
                }
            }
        }

    ?>
    <p><a href="query6.php">Ritorno nell'inserimento</a>
</body>

</html>