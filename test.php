<?php
    include("connect.php");

    echo "<br><br>";

    $query = "SELECT * FROM `ricordi`;";

    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "Nome: ".$row['nome']."<br>";
        echo "Titolo: ".$row['titolo']." ";
        echo "Paragrafo: ".$row['paragrafo']."<br>";
        echo "Data: ".$row['data_ricordo']."<br>";
        echo "Ora: ".$row['tempo_ricordo']."<br>";
        echo"<br><br>";
    }
?>