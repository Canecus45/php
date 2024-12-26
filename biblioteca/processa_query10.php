<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 10</title>
</head>

<body>
    <?php
    require('biblioteca.php');
    $books = [];
    $copie = 0;
    $bookName = '';
    foreach ($libri as $book) {
        $books[] = [
            'titolo' => $book['titolo'],
            'copie' => $book['copie'],
        ];
        }

    foreach ($books as $book) {
        if ($copie < $book['copie']) {
            $copie = $book['copie'];
            $bookName = $book['titolo'];
            }
        }

    if ($bookName != null or $bookName != '') {
        echo '<h1>Quale è il libro con maggiori copie?</h1>';
        echo 'Il libro con maggiori copie è <b>'.$bookName.'</b> con <b>'.$copie.'</b> copie';

        }
    ?>
</body>

</html>