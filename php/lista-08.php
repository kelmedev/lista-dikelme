<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //8) Ler três números e informar qual é o maior e qual é o menor dentre os três.
    
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    $resultado = 0;
    
    $num1 = $_POST['q8num1'];
    $num2 = $_POST['q8num2'];
    $num3 = $_POST['q8num3'];

    if ($num1 == $num2 and $num2 == $num3) {
        $resultado = "<h4> Os três números são iguais, não há um número maior e nem um número menor. </h4>";
    } elseif($num1 > $num2 and $num2 > $num3 and $num1 > $num3) {
        $resultado = "<h4> O primeiro número ($num1) é o maior número, o terceiro número ($num3) é o menor número. </h4>";
    } elseif ($num2 > $num1 and $num1 > $num3 and $num2 > $num3) {
        $resultado = "<h4> O segundo número ($num2) é o maior número, o terceiro ($num3) é o menor número. </h4>";
    } elseif ($num3 > $num2 and $num2 > $num1 and $num3 > $num1) {
        $resultado = "<h4> O terceiro número ($num3) é o maior número, o primeiro número ($num1) é o menor número. </h4>";
    } elseif  ($num2 > $num3 and $num3 > $num1 and $num2 > $num1) {
        $resultado = "<h4> O segundo número ($num2) é o maior número, o primeiro ($num1) é o menor número. </h4>";
    } elseif ($num1 > $num3 and $num3 > $num2 and $num1 > $num2) {
        $resultado = "<h4> O primeiro número ($num1) é o maior número, o segundo número ($num2) é o menor número. </h4>";
    } else {
        $resultado = "<h4> O terceiro número ($num3) é o maior número, o segundo número ($num2) é o menor número. </h4>";
    }
    
    
    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   