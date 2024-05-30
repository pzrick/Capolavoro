<?php
    include("connect.php");

    echo"<br><br>";

    if($_POST['nome']==""){
        $nome = "anonimo";
    }
    else{
        $nome = $_POST['nome'];
    }
    
    $titolo = $_POST['titolo'];
    $paragrafo = $_POST['paragrafo'];
    $data = date("Y/m/d");
    $ora = date("H:i:s");
    
    echo "Nome: $nome <br>";
    echo "Titolo: $titolo <br>";
    echo "Paragrafo: $paragrafo <br>";
    echo "Data: $data <br>";
    echo "Ora: $ora";

    $query = "INSERT INTO `ricordi`(`nome`, `titolo`, `paragrafo`, `data_ricordo`, `tempo_ricordo`) VALUES ('$nome','$titolo','$paragrafo','$data','$ora')";

    $risultato = mysqli_real_query($connection, $query);

    if(!$risultato){
        echo "Errore: query fallita.";
        exit();
    }

    echo "<br><br>Successo.";


?>