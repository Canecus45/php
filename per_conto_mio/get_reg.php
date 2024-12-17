<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seconda pg</title>
</head>

<body>
    <?php

    session_start();

    $regValue = $_GET['regName'];

    echo "Your registration is: ".$regValue.".";

    ?>

    <p><a href="set_reg.php">Back to set_reg.php</a>
</body>

</html>