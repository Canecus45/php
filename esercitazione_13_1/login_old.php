<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione login</title>
</head>

<body>

    <?php

    session_start();

    $regValue = "";
    $_SESSION['username'] = $regValue;

    ?>
    <h2>login</h2>

    <form method="get" action="pagina_accesso.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="Password">Password:</label>
        <input type="text" id="password" name="password"><br>
        <input type="submit" value="submit">
    </form>

</body>

</html>