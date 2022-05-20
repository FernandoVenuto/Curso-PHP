<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas PHP</title>
</head>
<body>
    <?php

    function soma(){
        $p = func_get_args();
        $tot = func_num_args();
        $s = 0;

        for($i=0;$i<$tot;$i++){
            $s += $p[$i];
        }
        return $s;
    }

    $r = soma(2,6,7,20);
    echo " A soma dos valores de é $r";
    ?>
</body>
</html>  