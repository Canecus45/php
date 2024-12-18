<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query 7</title>
</head>

<body>
    <?php

    session_start();

    echo '<h1>Quali sono i lettori di una certa città nati dopo un certo anno?</h1>';

    $regValue = [];
    $_SESSION['regName'] = $regValue;

    ?>

    <form method="get" action="processa_query7.php">
        city: <input type="text" name="city" value="">
        year: <input type="text" name="year" value="">
        <input type="submit">
    </form>

</body>

</html>