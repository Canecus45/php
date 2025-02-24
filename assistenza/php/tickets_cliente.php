<!DOCTYPE html>
<html>
<head>
    <title>Assistenza</title>
    <meta charset="utf-8">
    <meta name = "viewport" content="width-device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" intergrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIW3"
    crossorigin="anonymous">
</head>
<body>
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    rel="stylesheet" intergrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
    </script>

<div class ="container">
        <?php
        // 1) Assegno i valori alle variabili necessarie per stabilire la connessione
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "assistenza";

        //2) Mi connetto al database
        $conn = new mysqli($hostname, $username, $password, $dbname);

        //3) controllo di avvenuta connessione 
        if ($conn->connect_error)
            die ("Errore di comprensione");

        //recupero il parametro passato dalla pagina elenco_tecnici.php
        $codice = $_REQUEST['codice']; //è indifferente uso $_REQUEST o $_GET
        //Elenco tutti gli interventi  effettuati dal tecnico selezionato
        $query="SELECT * FROM ticket WHERE CLIENTE = $codice";
        
        $tabella=$conn->query($query);
        if ($tabella->num_rows == 0)
            die("Non ci sono ticket di quel cliente");
        ?>

        <table class='table table-bordered'>
            <tr>
                <th>Numero Intervento</th>
                <th>TICKET</th>
                <th>TECNICO</th>
                <th>Data</th>
            </tr>
            <?php
                while($row=$tabella->fetch_assoc()){
                    echo "<tr><td>{$row['numero']}</td> <td>{$row['TICKET']}</td> <td>{$row['TECNICO']}</td> <td>{$row['data']}</td></tr>";


                }
            ?>
        </table>
</body>
</html>