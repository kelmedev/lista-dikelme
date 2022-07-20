<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //5) Verificar qual dentre dois números distintos digitados pelo usuário é maior e qual é menor, mostrando isso ao final da execução. Considere que nunca haverá entradas iguais.
    
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if($num1 > $num2){
        $resultado = "<h4>$num1 é maior que $num2.</h4>";
    } elseif ($num1 < $num2) {
        $resultado = "<h4>$num2 é maior que $num1.</h4>";
    } else {
        $resultado = "<h4> Os dois números são iguais, então um não pode ser maior que o outro. </h4>";
    }

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   


