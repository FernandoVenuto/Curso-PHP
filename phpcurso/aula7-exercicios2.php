<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional If</title>
</head>
<body>

<?php 
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "Você nascer em $a e tera $i anos.<br><br>";

    if($i >= 18){
        $v = "Já pode votar";
        $d = "Ja pode dirigir";
    }
    else{
        if($idade >= 16 && $idade <18){
            $tipoVoto="voto opcional";
        }
        else{
            $tipoVoto = "voto obrigatorio;";

        }
    }
    echo "Com essa idade voce $v e tambem $d";
?>
    
</body>
</html>