<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ricordi";

    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    if(!$connection){
        die("Connessione fallita.");
        exit();
    }

    echo "Connessione riuscita.";
?>