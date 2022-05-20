<?php
    echo "<br><br>Comentarios em php! podemos utilizar para comentarios inline o // ou o # <br>
    <br>E para comentarios Multiline utilizamos o /* e o */, tudo entre eles sera considerado comentario." 
    ?>


        <?php 
        //o PHP consegue utilizar variaveis referenciadas.

        $a = 3;
        $b = $a;
        $b+= 5;

        echo "<br><br><br>A variavel A vale $a";
        echo "<br>A variavel B vale $b";
        ?>


<?php 
    //Variaveis Variaveis

    $x = "abc";
    $$x = "def";
    echo "<br><br>O conteudo da variavel X e $x";
    echo "<br>A variavel ABC criada recebeu o valor $abc"
?>