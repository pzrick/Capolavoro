<?php
    include("connect.php");

    $id = $_GET['id'];

    $query = "SELECT * FROM `ricordi` WHERE id_ricordo=$id;";

    $risultato = mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pages/ricordi_post/css/ricordi_post.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Ecco a te il tuo ricordo</title>
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
            <?php
                if(!$risultato){
                    ?>
                    <h1>ERRORE: query fallita.</h1>
                    <?php
                    exit();
                }
                else{
                    ?>
                    <h1>Query eseguita con successo!</h1>
                    <?php
                }?>

            <div class="view-data">
            <table class="table table-bordered">
                    <tr class="bg-dark text-white">
                        <td> Nome </td>
                        <td> Titolo </td>
                        <td> Paragrafo </td>
                        <td> Data pubblicazione </td>
                        <td> Ora pubblicazione </td>
                        <td> ID ricordo </td>
                    </tr>
                    <tr>
                        <?php
                            while($row = mysqli_fetch_assoc($risultato)){
                            ?>
                            <td> <?php echo $row['nome'];?></td>
                            <td> <?php echo $row['titolo'];?></td>
                            <td> <?php echo $row['paragrafo'];?></td>
                            <td> <?php echo $row['data_ricordo'];?></td>
                            <td> <?php echo $row['tempo_ricordo'];?></td>
                            <td> <?php echo $row['id_ricordo'];?></td>
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