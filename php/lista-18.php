<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //18) Mostrar todos os números pares no intervalo de 1 a 250 e a soma de todos eles (pares), ao final.
    
    $num1 = 1;
    $num2 = 0;
    $resultado = 0;

    while ($num1 <= 250){
        $num1 = $num1 + 1; 
        if ($num1 % 2 == 0){
            echo "<br> <h4>($num1) </h4>";
            $num2 = $num2 + $num1;
        }
    }
    
    $resultado = "<h4> A resultante da soma de todos os pares que existem entre 1 e 250, é de ($num2). </h4>";

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   