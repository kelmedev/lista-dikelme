<?php
    //Questão 04
    $num = 0;
    $num = $_POST['num'];
    
    echo "<h1> Resultado: <h1>";
    
    if($num > 0)
        echo "<h2>O número digitado ($num) é positivo!<h2>";
    
        elseif($num == 0)
            echo "<h2>O número digitado ($num) é nulo!<h2>";
    
    elseif($num < 0)
        echo "<h2>O número digitado ($num) é negativo!<h2>";

    echo "<p> Obrigado por utilizar nosso programa! <p>";
    
?>