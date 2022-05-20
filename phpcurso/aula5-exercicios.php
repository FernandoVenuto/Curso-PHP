<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h2{
            display: inline;
        }
    </style>
</head>
<body>
    <?php 
        $preco = $_GET["y"];
        echo "<h1>Exercicio 1. Aplicar 10% de desconto em um produto.</h1>";
        echo "<h2>O produto custa $preco  porém está sendo vendido com 10% de desconto quanto irá custar?</h2>";
        $preco2 = $preco-($preco*10/100);
        echo "<br>R:com 10% de desconto o valor sera de R$".number_format($preco2, 2);
    ?>

    

    
</body>
</html>