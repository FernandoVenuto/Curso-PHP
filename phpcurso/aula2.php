<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <!--TODA VARIAVEL EM PHP COMEÇA COM $ E LOGO APÓS = "VALOR DA VARIAVEL"
        NÃO EXISTE TIPOS DEFINIDOS DE VARIAVEL-->

    <!--PORÉM É POSSIVEL FORÇAR A CONVERSÃO DE VARIAVEL. -->

    <?php echo "<h1>É possivel forçar uma variavel a mudar o seu 'tipo' da seguinte maneira.</h1><br>
        <h2>Para numero inteiros.(Sem casas decimais)</h2>
        <h2>Para numeros reais (salário).</h2>
        <h2>Para caractere (string, nome, palavra)</h2>
        <h2>Para logico (true = 1 // false = vazio)</h2>" ?>


    <!--Variaveis.-->
    <h1>Aqui inicia as aulas com variaveis.</h1>
    <?php
    $n = 18;
    $no = "Fernando";

    echo "$n"
    ?>

    <h2>Como realizar concatenação?</h2>
    <h3>
        ficaria ("$var{nome} possui $var{idade}")
        <h4 style="width:300px;color: red; background-color:yellow">Sempre utilizar aspas duplas!!</h4>
    </h3>

    <?php echo "<h2>$no possui $n!</h2>";  ?>
</body>

</html>