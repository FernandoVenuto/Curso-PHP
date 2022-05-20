<?php 
    /*Este exercico foi utilizado para receber o ano atual e descobrir o ano anterior usando operadores de atribuição.*/ 
    echo "<h1>Exercicio 2. Mostra qual foi o ano anterior ao ano atual.";
    $atual = $_GET["aa"]; // Essa linha irá pegar a variavel na url
    echo "<br><h2>O Ano atual é $atual e o ano anteriror e</h2> ". --$atual;
    ?>