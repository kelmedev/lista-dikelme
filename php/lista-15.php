<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //15) Mostrar todos os números múltiplos de 5 no intervalo de 1 até 40.

    $num = 5;


    echo  "<h1>Resultado:</h1>";
    
    while ($num <= 40) {
        if ($num % 5 == 0) {
            echo "<br><h4> ($num) </h4>";
        } else {
            $num = $num + 1;
            echo "<br><h4> ($num) </h4>";
        }
        $num  = $num + 5;
    }  

    echo "<h3> Obrigado por utilizar nosso programa! </h3>";
?>