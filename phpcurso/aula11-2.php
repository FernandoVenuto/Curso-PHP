<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11-2</title>
</head>

<body>
    <?php
    $i = 1;
    while ($i <= 5) {
        $v = "num" . $i;
        $url = "v" . $i;
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
        $i++;
    }
       echo "$num1 $num2 $num3 $num4 $num5";
    /* 
   $i = 1;
    while ($i<= 5){
        $v = "num" . $i;
        echo "Valor $i : " . $$v . "<br>";
        $i();
    }
    */
    ?>

</body>

</html>