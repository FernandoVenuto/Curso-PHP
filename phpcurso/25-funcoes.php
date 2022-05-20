<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>25 Funções</title>
</head>
<body>

<?php
//PRIMEIRA
echo "<h2>1.</h2>";
echo "printf()<br>";
$p = "leite";
$pr = 4.5;
//echo "O $p custa R$". number_format($pr,2);
printf ("O %s custa R$ %.2f", $p, $pr);
?>
<br><br><br>
<?php
//SEGUNDA
echo "<h2>2.</h2>";
//echo "print_r() <br>";
    $V[0] = 4;
    $V[1] = 8;
    $V[2] = 3;

   // print_r($V);


    $v2 = array( 3, 7,6,2,1,9);
    print_r($v2);
?>
<?php
//TERCEIRA
echo "<h2>3.</h2>";  

    $text= "Aqui temos um texto gigante criado pelo php e vai mostrar o funcionamento da função wordwrap";
    $r = wordwrap($text, 5, "<br>\n", true);
    echo "$r";
?>
    
</body>
</html>