<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa query 12</title>
</head>

<body>
    <?php
    require('biblioteca.php');

    $pendingBooks = [];
    foreach ($prestiti as $book) {
        array_push($pendingBooks, $book['lettore']);
        }

    print_r(array_count_values($pendingBooks));

    ?>
</body>

</html>