<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
    print_r($vegetali);

    echo "<br>";

    /*array_splice($begetali,8,4,array("girasole","tulipano"));
    print_r($vegetali);*/

    echo "<br>";

    sort($vegetali);
    print_r($vegetali)
    ?>
</body>

</html>