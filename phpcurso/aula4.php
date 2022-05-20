<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            color: #171717;
        }
    </style>
</head>
<body>
    <h2>Funções Aritmeticas em php</h2>

    <?php 
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2> Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 e ". abs($v2); // Valor Absoluto, retira o valor negativo, deixando somente o numero.
    echo "<br>O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2); // o .pow serve para realizar a potenciação de uma variavel pela outra
    echo "<br>A raiz de $v1 é " .sqrt($v1); // Sqrt é para achar a raiz quadrada.
    echo "<br> O valor de $v2 arredondado e ". round($v2); // ceil ou floor (Ceil arredonda para cima, Floor arredonda para baixo.)
    echo "<br> A parte inteira de $v2 e " .intval($v2); // Aqui ele esta pegando a parte inteira, $v2 estava com numero real, o intval transforma em numero inteiro.
    echo "<br> O valor de $v1 em moeda e R$" .number_format($v1, 2,",","."); // Aqui está transformando o valor em dinheiro por exemplo. Primeiro vem o numero, depois a quantidade de casa decimal, o tipo de , e o separador.
    ?>
</body>
</html>