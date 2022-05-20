<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura condicional</title>
</head>

<body>
    <h1>
        Estrutura condicional
    </h1>
    <h2>
        Nesta expressão diz, <strong>SE</strong> a varialvel $a for maior do que $b, $maior recebe $a; <strong>SE NÃO</strong> $maior recebe $b
    </h2>
    if ($a>$b){<br>
    &nbsp;$maior = $a;
    <br>
    }<br>else {<br>
    &nbsp;$maior = $b;
    <br>
    }

    <br><br>
    <h2>
        Nesta expressão diz, <strong>SE</strong> a varialvel $idade for maior do que 18, está autorizado a dirigir e obrigatoriedade do voto, <strong>SE NÃO</strong> Não pode dirigir e não tem a obrigatoriedade do voto
    </h2>
    if($idade>=18){<br>
    $vota = true;
    $dirige = true;
    <br>
    }<br>else{<br>
    $vota = false;
    $dirige = false;
    <br>
    }
</body>

</html>