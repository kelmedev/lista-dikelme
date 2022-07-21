<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //16) Mostrar a soma de todos os números de 1 a 100.
    
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;
    
    while ($num1 < 100) {
        $num1 = $num1 + 1;
        $num2 = $num1 + $num2;
    } 

    $resultado = "<h4> A soma de todos números de 1 a 100, totaliza exatamente ($num2). </h4>";

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   