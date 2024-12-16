<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Funzioni sulle stringhe</h1>

    <?php
    $messaggio="Ciao studenti, vi piace i lcorso di php?";
    
    echo "la mia frase contiente: " . strlen($messaggio)."caratteri"."<br>";

    echo strtoupper($messaggio)."<br>";

    echo strtolower($messaggio)."<br>";

    echo str_replace("Ciao"."Carl".$messaggio)
    ?>
</body>

</html>