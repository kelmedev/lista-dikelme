<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //10) Ler três números e mostrá-los em ordem crescente.
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    $resultado = 0;
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 == $num2 or $num2 == $num3) {
        $resultado = "<h4> Há alguma igualdade entre os números digitados, portanto não iremos ordená-los. </h4>";
    } elseif($num1 > $num2 and $num2 > $num3 and $num1 > $num3) {
        $resultado = "<h4> ($num3), ($num2), ($num1)... </h4>";
    } elseif ($num2 > $num1 and $num1 > $num3 and $num2 > $num3) {
        $resultado = "<h4> ($num3), ($num1), ($num2)...  </h4>";
    } elseif ($num3 > $num2 and $num2 > $num1 and $num3 > $num1) {
        $resultado = "<h4> ($num1), ($num2), ($num3)... </h4>";
    } elseif  ($num2 > $num3 and $num3 > $num1 and $num2 > $num1) {
        $resultado = "<h4> ($num1), ($num3), ($num2)... </h4>";
    } elseif ($num1 > $num3 and $num3 > $num2 and $num1 > $num2) {
        $resultado = "<h4> ($num2), ($num3), ($num1)... </h4>";
    } else {
        $resultado = "<h4> ($num2), ($num1), ($num3)... </h4>";
    }
    
    
    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   