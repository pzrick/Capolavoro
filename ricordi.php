<?php
    include("connect.php");

    $query = "SELECT * FROM `ricordi`;";
    $result = mysqli_query($connection, $query);

    $rowcount = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pages/ricordi/css/ricordi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Ricordi</title>
</head>
<body style="background-color: #000a0c;">
    <header>
        <a href="#" class="logo">IISS E. Majorana Termoli</a>

        <nav class="navbar">
            <a href="homepage.html">Home</a>
            <a href="laboratori.html">Laboratori</a>
            <a href="nao.html">Robotica umanoide (NAO)</a>
            <a href="qorario.html">Quadro orario</a>
        </nav>
    </header>



    
    <main>
        <div class="container">
            <div id="ricordi-titolo">
                <h1 style="color: white;">Ricordi</h1>
                <p>
                    Lascia un ricordo indelebile su questa pagina, col tuo nome o in completo anonimato!
                </p>
                <div class="bottone">
                    <a href="ricordi_view.php?id=<?php echo rand(1,$rowcount)?>">Ricordo casuale</a>
                    <a href="ricordi_form_post.html">Lascia un ricordo</a>
                </div>
            </div>

            <div id="ricordi">
                <table class="table table-bordered">
                    <tr class="bg-dark text-white">
                        <td> Nome </td>
                        <td> Titolo </td>
                        <td> Paragrafo </td>
                        <td> Data pubblicazione </td>
                        <td> Ora pubblicazione </td>
                        <td> ID ricordo </td>
                        <td></td>
                    </tr>
                    <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <td> <?php echo $row['nome'];?></td>
                            <td> <?php echo $row['titolo'];?></td>
                            <td> <?php echo $row['paragrafo'];?></td>
                            <td> <?php echo $row['data_ricordo'];?></td>
                            <td> <?php echo $row['tempo_ricordo'];?></td>
                            <td> <?php echo $row['id_ricordo'];?></td>
                            <td><a href="ricordi_view.php?id=<?php echo"$row[id_ricordo]"?>">Visualizza</a></td>
                    </tr>
                    <?php
                    
                    }
                    
                    ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>