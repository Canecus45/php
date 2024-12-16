<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Funzioni parametri</h1>
    <?php
    function messaggioAuguri($messaggio){
        echo $messaggio;
    }
    messaggioAuguri("buon compleanno!");

    echo "<br>";

    messaggioAuguri("Buon onomastico!");

    function sommaNumeri($num1,$num2){
        $somma=$num1+$num2;
        return $somma;
        //echo $somma;

    }
    echo "<br>La somma dei due numeri è".sommaNumeri(12,20);


    echo "<br>";

    //Definizione funzione con parametro formale di defalut
    function chiama($nome="Nessuno"){
        echo "il mio nome: ".$nome."<br>";
        return;
    }

    //Chiamata funzione senza parametro
    chiama();
    //Chiamata con parametro
    chiama("testo di prova")
    ?>
</body>

</html>