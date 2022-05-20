<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilização do For</title>
</head>
<body>

    <?php
    
        for($c=1; $c<=10;$c++){
            echo"$c <br>";
    }
        echo"<br><br>";

        for($i=10; $i>=1;$i--){
            echo"$i <br>";
        }

        echo"<br><br>";

        for($b=20;$b>=1;$b-=2){
            echo"$b <br>";
            
        }

        echo"<br><br>";

        for($x=0;$x<=50;$x+=5){
            echo"$x <br>";
        }
    ?>

</body>
</html>