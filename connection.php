<?php
    $nomeDB = "database_esposizione";
    $connessione = new mysqli("localhost", "root", "");

    if (mysqli_errno($connessione)) {
        printf("Oops, abbiamo problemi con la connessione al db: %s\n", mysqli_error($connessione));
        exit();
    } else {
        echo "connesso<br />";
    }
?>