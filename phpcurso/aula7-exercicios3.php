<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Media</title>
</head>
<body>

<?php
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$media = ($nota1 + $nota2)/2;

echo "A sua média é $media";

    if($media < 5.5){
        $result = "REPROVADO";
    }elseif($media >= 5.5 && $media < 7){
        $result = "RECUPERÇÃO";
    }
    else{
        $result = "APROVADO";
    }

    echo "<br><br>Portanto você está $result"
?>
    
</body>
</html>