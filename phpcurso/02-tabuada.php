<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada resultado</title>
</head>
<body>
    <?php
    $n = isset($_GET["num"])?$_GET["num"]:0;
    for ($c=1;$c<=10;$c++){
        $r = $n * $c;
        echo"$n X $c = $r <br>";
    } 
    ?>
    <br><br>
    <a href="javascript:history.go(-1)">Voltar</a>
    
</body>
</html>