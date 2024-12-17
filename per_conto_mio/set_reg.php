<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova form</title>
</head>

<body>
    <?php

    session_start();

    $regValue = "";
    $_SESSION['regName'] = $regValue;

    ?>

    <form method="get" action="get_reg.php">
        Name:<input type="text" name="regName" value="">
        <input type="submit">
    </form>
</body>

</html>