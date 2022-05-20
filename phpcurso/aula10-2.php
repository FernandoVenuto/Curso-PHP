<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $estado = $_GET["estado"];
    
    echo "Você é da Região <span style=color:red;font-weight:strong:font-size:15px;>$estado</span>";
    ?>
</body>
</html>