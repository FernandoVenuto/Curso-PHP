<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h1>Operadores de Atribuição</h1>
    
    <?php 
    echo '<h1>Se eu quiser utilizar Operadores de Atribuicao para realizar expressões matematicas em que a variavel que sera utilizada for receber ela mesma, por exemplo $a += $a + $b .</h1>';
    echo "<h2> basta utilizar o operador que for necessario concatenado com = , como no exemplo +=</h2>";
    echo "Sendo assim $n1 += $n1 + $n2 é igual a ". ($n1+=$n1+$n2);
    ?>
</body>
</html>