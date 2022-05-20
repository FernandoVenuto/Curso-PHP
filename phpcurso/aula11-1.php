<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Exercicio 11-02</title>
</head>

<body>
    <form method="get" action="aula11-2.php">
        <?php
        $c = 1;
        while ($c <= 5) {
            echo "Valor $c: <input type='number' name= 'v$c' max= '100' min ='0' value='0'><br>";
            $c++;
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>