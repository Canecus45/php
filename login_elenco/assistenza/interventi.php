<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interventi</title>
</head>

<body>
    <div class="container">
        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "assistenza";

        $conn = new mysqli($hostname, $username, $password, $database);

        if ($conn->connect_error) {
            die("errore di connessione");
            }

        $matricola = $_REQUEST['matricola'];
        $query = "SELECT numero,TICKET,Tecnico,DATE_FORMAT(data,'%d/%m/%Y'),FROM interventi WHERE TECNICO = $matricola";

        $result = $conn->query($query);
        if ($result->num_rows == 0) {
            die("Non ci sono stati interventi da tecnici");
            }
        ?>

        <table class="table table-borded">
            <tr>
                <th>Numero intervento</th>
                <th>TICKET</th>
                <th>TECNICO</th>
                <th>Data</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $query = "SELECT numero,TICKET,Tecnico,DATE_FORMAT(data,'%d/%m/%Y'),FROM interventi WHERE TECNICO = $matricola";
                $result = $conn->query($query);

                echo "<tr><th>".$row['numero']."</th>";
                echo "<th>".$row['TICKET']."</th>";
                echo "<th>".$row['tecnico']."</th>";
                echo "<th>".$row['data']."</th></tr>";

                }
            ?>
        </table>
    </div>


</body>

</html>