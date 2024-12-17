<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 4</title>
</head>

<body>
    <h1>Quali sono i libri in prestito a giacomo</h1>
    <?php require('biblioteca.php');
    echo '<table border="1" cellspacing="0" cellpadding="2">';
    echo '<tr><th style="background-color:lavender">libro</th></tr>';
    foreach ($prestiti as $prestito) {
        if ($prestito['lettore'] == "giacomo") {
            echo '<tr><td align="center">'.$prestito['libro'].'</td></tr>';
            }
        }
    echo '</table>'; ?>
</body>

</html>