<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Funzioni math</h1>
    <?php
    echo sqrt(100);
    echo"<br>";

    echo max(34,78,95,12,69)."<br>".min(34,78,95,12,69);
    echo "<br>";
    echo cell(3.2);

    echo "<br>";

    echo floor(3.8);
    echo "<br>";
    echo round(3.2);

    echo "<br>";
    echo round(3.5);
    echo "<br>";

    echo rand(1,100);

    ?>

    <h1>Funzioni sulle stringhe</h1>

    <?php
    $messaggio="Ciao studenti, vi piace i lcorso di php?";
    
    echo "la mia frase contiente: " . strlen($messaggio)."caratteri"."<br>";

    echo strtoupper($messaggio)."<br>";

    echo strtolower($messaggio)."<br>";

    echo str_replace("Ciao"."Carl".$messaggio)
    ?>

    <h1>Funzioni sugli array</h1>

    <?php

    $fiori=array("rosa"."ciclamino"."gelsomino"."orchidea"."rosa");
    $frutta=array("banana"."pesca"."mandarino"."pesca");

    $vegetali=array_merge($fiori,$frutta);

    echo count($vegetali);
    echo "<br>";
    $contaItem=array_count_values($vegetali);
    echo $contaItem["rosa"]."".$contaItem["banana"];
    echo "<br>";

    if(in_array("arancia".$vegetali)){
        echo "I mandarini ci sono";
    }else{
        echo "Peccato i mandarini non ci sono";
    }

    echo "<br>";

    array_push($vegetali."ananas");
    // mette dentro all'array l'anansso
    print_r($vegetali);
    // fa una stampa dell'array con l'ananasso

    echo "<br>";

    array_splice($vegetali,8,4,array("girasole","tulipano"));
    // leva gli elementi in pos 8 e 4 e quelli che corrispondo a "girasole" e "tulipano"
    print_r($vegetali);
    // stampa l'array e ci fa vedere che PHP funziona a levare le cose dagli array

    echo "<br>";

    sort($vegetali);
    print_r($vegetali)
    ?>
</body>

</html>