<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 2</title>
</head>

<body>
    <?php require('biblioteca.php');
    echo '<table border="1" cellspacing="0" cellpadding="2">';
    echo '<tr><th style="background-color:lavender">lettore</th></tr>';
    foreach ($lettori as $persona)
        echo '<tr><td align="center">'.$persona['nome'].'</td></tr>';
    echo '</table>'; ?>
</body>

</html>