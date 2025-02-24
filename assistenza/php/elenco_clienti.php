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
        // Connessione al database
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "assistenza";

        $conn = new mysqli($hostname, $username, $password, $dbname);
        //controllo di avvenuta connessione
        if ($conn->connect_error)
            die ("Errore di comprensione");

        //impostazione comando sql per eseguire la query
        $query="select * from clienti";

        //esecuzione della query tramite il metodo query. La query restituisce una tabella temporanea
        $tabella=$conn->query($query);

        if ($tabella->num_rows == 0)
            echo("Non è presente nessun tecnico ");
        
        echo "<table class='table table-bordered'> <tr><td>Codice</td><td>Nome</td><td>Cognome</td><td>Username</td></tr>";
        //usiamo la funzione fetch_assoc() per scorrere i record ottenuti dall'esecuzione della query
        //e memorizzati nella tabella
        while($row=$tabella->fetch_assoc()){
            //faremo riferimento alle colonne della nostra tabella non tramite un indice $row[0] ma con il nome dell'attributo $row['matricola']
            //l'uso del tag href ci permetterà di rendere cliccabile la matricola e passarla come parametro alla pagina .php
            echo "<tr><td><a href=tickets_cliente.php?codice={$row['codice']}>{$row['codice']}</a></td><td>{$row['nome']}</td><td>{$row['cognome']}</td><td>{$row['username']}</td></tr>";
        }
        echo "</table>";
        
        ?>
    </div>
</body>
</html>