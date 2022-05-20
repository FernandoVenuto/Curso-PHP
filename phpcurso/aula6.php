<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operadores Relacionais.</h1>

    <h2>Os Operadores Relacionais são.</h2>
    <ul>
        <li>
        Maior = $a > $b
        </li>
        <li>
        Menor = $a < $b
        </li>
         <li>
        Maior ou igual =  $a>= $b
        </li>
        <li>
        Menor ou igual =  $a<= $b
        </li>
        <li>
        Diferente =  $a < > $b ou $a != $b
        </li>
         <li>
        Igual =  $a== $b
         </li>
         <li>
             Identico = $a===$b
         </li>
    </ul>

    <h2>Operador Unário</h2>

    expressão ? verdadeiro : false  <!-- Aqui nada mais que a expressão, recebe verdadeiro ou falso.-->
    <br>

    $a>$b ? $a : $b <!-- Aqui diz que se $a for maior que $b ira receber um valor ou outro valor.-->
    <br>

    $maior = $a > $b ? $a : $b  <!-- Aqui a $maior esta verificando se $a é maior que $b, se $a for maior que $b a variavel $maior ira receber o valor de $a.-->
    <br><br><br>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    echo "Os valores passados foram $n1 e $n2 <br>";
    $r = ($tipo == "s") ? $n1 + $n2: $n1 * $n2;
    echo "O resultado sera $r";
     ?>
    
</body>
</html>