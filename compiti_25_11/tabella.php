<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabella</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td {
            border: 3px solid blue;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $numero = 3; 
        for ($i = 0; $i < 20; $i++) { 
            echo "<tr>";
            for ($j = 0; $j < 20; $j++) { 
                echo "<td>$numero</td>";
                $numero += 3; 
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
