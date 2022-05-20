<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>


    <?php
    $numero = isset($_GET["tabuada"]) ? $_GET["tabuada"] : 0;
    echo "<h1>O resultado da tabuada do $numero é:</h1><br><br>";


    $c = 1;
    do {
        echo "$numero x $c = " . ($numero * $c) . "<br>";
        $c++;
    } while ($c <= 10);
    ?>

    <a href="aula12-1.php">Voltar</a>

</body>

</html>