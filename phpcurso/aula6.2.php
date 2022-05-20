<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Operadores Logicos.</h1>

    <img src="imagens/Operadores Logicos.PNG" alt="" style="width: 500px;">

    <h2>Você é obrigado a votar?</h2>
    <?php
    $ano = $_GET["an"];
    $idade = 2022 - $ano;
    echo "Quem nasceu em $ano possui $idade anos";

    $tipo = ($idade>=18 && $idade <65)? "OBRIGATORIO": "NÃO OBRIGATORIO";
    echo "<br>Sendo assim o seu voto é $tipo";


    $v = $_GET["v"];
    echo "<br><br>Você passou no radar com a velocidade de $v";
    $rad = ($v >= 86)? "Você foi multado" : "Poder seguir.";
    echo "<br>Portanto você : $rad";
    ?>
</body>
</html>