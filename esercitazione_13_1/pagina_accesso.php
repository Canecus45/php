<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina d'accesso</title>
</head>

<body>
    <?php
    include("credenziali.php");
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    foreach ($utenti as $utente) {
        if (($utente['username'] == $username) && ($utente['password'] === $password)) {
            echo $username.' benvenuto/a';
            } else {
            echo 'Credenziali errate, password o username sbagliati';
            }
        }
    ?>
</body>

</html>