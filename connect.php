<?php
    $hostname = "localhost"
    $username = ""
    $password = ""
    $dbname = "ricordi"

    $connection = mysqli_connect($hostname, $username, $password, $dbname);

    if(!$connection){
        die(echo "Connessione fallita.");
        exit();
    }

    else{
        echo "Connessione riuscita."
    }
?>