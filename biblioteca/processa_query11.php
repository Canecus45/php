<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 11</title>
</head>

<body>
    <?php
    require('biblioteca.php');
    $persons = [];
    $readers = [];
    $books = [];
    $pendingBooks = [];

    /*
    lettori --> array --> elementi a cui voglio accedere
            --> array --> elementi a cui voglio accedere

    quindi
    lettori di i == a array_i che sarebbe

    lettori[i] --> array di i --> elementi a cui voglio accedere
               --> array di i --> elementi a cui voglio accedere

    si può applicare a entrambi gli array
    */

    foreach ($lettori as $reader) {
        $persons[] = [
            'nome' => $reader['nome'],
            'nascita' => $reader['nascita'],
        ];
        }
    foreach ($libri as $book) {
        array_push($books, $book['anno']);
        }
    foreach ($prestiti as $book) {
        $pendingBooks[] = [
            'person' => $book['lettore'],
        ];
        }

    foreach ($persons as $reader) {
        if (in_array($reader['nascita'], $books, false)) {
            if (in_array($reader['nome'], array_column($pendingBooks, 'person'), false)) {
                array_push($readers, $reader['nome']);
                }
            }
        }
    if (empty($readers)) {
        echo 'Non è stato riscontrato nessun lettore che ha preso in prestito un libro pubblicato nel suo anno di nascita';
        } else {
        echo '<h1>Chi sono i lettori che hanno preso in presito un libro pubblicato quando sono nati?</h1>';
        echo '<table border="1" cellspacing="0" cellpadding="2">';
        echo '<tr><th style="background-color:lavender">scrittore</th></tr>';
        foreach ($readers as $persona) {
            echo '<tr><td align="center">'.$persona.'</td></tr>';
            }
        }


    ?>
</body>

</html>