<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 9</title>
</head>

<body>
    <?php

    require("biblioteca.php");
    $writersAuthors = array();

    foreach ($prestiti as $prestito) {
        $book = array_filter($libri, function ($l) use ($prestito) {
            //  Qua sotto c'è il contenuto della funzione
            return $l['titolo'] == $prestito['libro'];
            });

        $book = reset($book); //tramite la funzione reset
        //il puntatore interno dell'array si resetta
    
        if ($book && $book['autore'] == $prestito['lettore']) {
            array_push($writersAuthors, $prestito['lettore']);
            }
        }

    if (empty($writersAuthors)) {
        echo "There are any writers that are readers";
        } else {
        echo '<h1>Quali sono gli autori che leggo le proprie opere?</h1>';
        echo '<table border="1" cellspacing="0" cellpadding="2">';
        echo '<tr><th style="background-color:lavender">scrittore</th></tr>';
        foreach ($writersAuthors as $persona) {
            echo '<tr><td align="center">'.$persona.'</td></tr>';
            }
        }
    ?>

</body>

</html>