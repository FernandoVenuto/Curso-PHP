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
    $in = $_GET["inicio"];
    $fim = $_GET["fim"];
    $inc = $_GET["incremento"];

    echo "$in &nbsp;";

    if ($in < $fim) { // Está condição é para especificar que haverá uma incrementação
        while ($in <= $fim) {
            $in += $inc;
            if ($in <= $fim) { // tem como função reter os números até o número colocado.
                echo "&nbsp;$in";
            }
        }
    } else {
        while ($in >= $fim) {
            $in -= $inc;
            if ($in >= $fim) {
                echo "&nbsp;$in";
            }
        }
    }
    ?>
    <a href="exercicio3-aula11.html">Voltar</a>
</body>

</html>