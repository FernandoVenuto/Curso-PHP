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

    if ($i < 16) {
        $tipoVoto = "não vota";

    } elseif (($i >= 16 && $i < 18) || ($i > 65)) {
        $tipoVoto = "voto opicional";
        
    } else {
        $tipoVoto = "voto obrigatorio";
    }

    echo "Com essa idade voce tem $tipoVoto ";
    ?>

</body>

</html>