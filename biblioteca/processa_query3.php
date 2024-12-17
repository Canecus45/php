<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 3</title>
</head>

<body>
    <?php require('biblioteca.php');
    echo '<table border="1" cellspacing="0" cellpadding="2">';
    echo '<tr><th style="background-color:lavender">lettore</th>';
    echo '<th style="background-color:lavender">titolo</th></tr>';
    foreach ($prestiti as $prestito) {
        echo '<tr>';
        echo '<td align="center">'.$prestito['libro'].'</td>';
        echo '<td align="center">'.$prestito['lettore'].'</td>';
        echo '<tr>';
        }

    echo '</table>';
    ?>
</body>

</html>