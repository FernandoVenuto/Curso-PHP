<!DOCTYPE html>
<html lang="en">
    <?php
    $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Generico";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"]: "#000";
    $font = isset($_GET["font"])? $_GET["font"]: "sans-serif";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
        p.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
            font-family: <?php echo $font; ?>;
        }
    </style>
</head>
<body>
    <?php 
    echo ("<p class='texto'>$txt</p>");
    ?>
</body>
</html>
<a href="index.html">Voltar</a>