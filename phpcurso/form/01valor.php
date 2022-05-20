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
    $valor = $_GET["v"];
    echo "digitou $valor";
    $rq = sqrt($valor);
    echo "<br>A raiz de $valor é igual a " . number_format($rq,0);
    ?>
    <a href="form.html">Voltar</a>
</body>
</html>