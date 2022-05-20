<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <form method="get" action="aula12-2.php">
       Numero <select name="tabuada">
            <?php
            $n = 1;
            do{
                echo "<option value=$n> $n </option>";
                $n++;
            } while($n<=100);
            ?>
        </select>
        <input type="submit" value="Calcular">
    </form>

</body>

</html>