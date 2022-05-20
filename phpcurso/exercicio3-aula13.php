<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $n  = isset($_GET["num"]) ? $_GET["num"] : 1;
    $t = 0;

    echo "Analisando os múltiplos de $n...<br><br>";
    echo "Valores multiplos";

    for ($c = 1; $c <= $n; $c++) {
        if ($n % $c == 0) {
            echo " $c ";
            $t++;
        }
    }

    echo "<br>Total de Multiplos: $t <br>";
    if ($t > 2) {
        echo "resultado: $n <br>NÃO É PRIMO<br>";
    }
    if ($t == 2) {
        echo "$n <br>É PRIMO";
    }

    ?>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>

</html>