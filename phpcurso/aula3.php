<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações aritméticas.</title>
</head>
<body>

    <?php 
    $title = "Operações Aritméticas."; 
    echo "<h1>$title</h1>"?>

    <?php
    
    $n1 = 5;
    $n2 = 6;
    echo "<h2>Valores recebidos: $n1 e $n2</h2>";
    $s = $n1 + $n2;
    $sub = $n1 - $n2;
    $mult = $n1 * $n2;
    $div = $n1 / $n2;
    $mod = $n1 % $n2;
    $m = ($n1 + $n2)/ 2;


    echo "A soma entre $n1 + $n2 é igual a = $s <br>";
    echo "A subtração entre $n1 - $n2 é igual a = $sub <br>";
    echo "A multiplicação entre $n1 * $n2 é igual = a $mult <br>";
    echo "A divisão entre $n1 / $n2 é igual a = $div <br>";
    echo "O resto da divisão entre $n1 e $n2 é igual a = $mod <br>";
    echo "<br> A media vale $m";
    ?>

    <?php echo "<h1>Como utilizar valores personalizados? Simples:</h1>

    "?>
    
</body>
</html>