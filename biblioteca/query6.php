<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 6</title>
</head>

<body>
    <?php

    session_start();

    echo '<h1>Inserire il periodo x : y (dove x sta all"anno minore e y sta all"anno maggiore)</h1>';

    $regValue = [];
    $_SESSION['regName'] = $regValue;

    ?>

    <form method="get" action="processa_query6.php">
        Min: <input type="text" name="minYear" value="">
        Max: <input type="text" name="maxYear" value="">
        <input type="submit">
    </form>
</body>

</html>