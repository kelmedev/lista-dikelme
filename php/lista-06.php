<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //6) Ler dois números e identificar se são iguais ou diferentes. Caso eles sejam iguais, imprimir uma mensagem dizendo que eles são iguais. Caso sejam diferentes, mostrar uma mensagem dizendo que são diferentes e informar qual número é o maior.
    
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if($num1 == $num2){
        $resultado = "<h4> O primeiro número ($num1) é igual ao segundo número ($num2). </h4>";
    } elseif($num1 > $num2) {
        $resultado = "<h4> O primeiro número ($num1) é maior que o segundo número ($num2), portanto estes números são diferentes. </h4>";
    } else { 
        $resultado = "<h4> O segundo número ($num2) é maior que o primeiro número ($num1), portanto estes números são diferentes. </h4>";
    }

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   