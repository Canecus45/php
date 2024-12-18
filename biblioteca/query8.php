<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 8</title>
</head>

<body>
    <?php

    session_start();

    echo '<h1>Quali sono gli autori con più di un certo numero di copie?</h1>';

    $regValue = [];
    $_SESSION['regName'] = $regValue;

    ?>

    <form method="get" action="processa_query8.php">
        Copie libri: <input type="text" name="books" value="">
        <input type="submit">
    </form>

</body>

</html>