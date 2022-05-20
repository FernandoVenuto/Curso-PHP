<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <?php 
    $n = isset($_GET["nome"])? $_GET["nome"]: $_GET["não atribuido"];
    $num = isset($_GET["ano"]) ? $_GET["ano"]:0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : ["sem sexo"];
    $idade = date("Y") - $num;

    echo "$n possui $idade anos e possui o sexo $sexo;";
    ?>
<a href="form2.html">Voltar</a>

    
</body>
</html>