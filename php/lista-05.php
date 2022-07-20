<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="php/favicon.ico">

<?php
    //5) Verificar qual dentre dois números distintos digitados pelo usuário é maior e qual é menor, mostrando isso ao final da execução. Considere que nunca haverá entradas iguais.
    
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if($num1 > $num2){
        $resultado = "<p>$num1 é maior que $num2!</p>";
    } elseif ($num1 < $num2) {
        $resultado = "<p>$num2 é maior que $num1!</p>";
    } else {
        $resultado = "<p> Os dois números são iguais, então um não pode ser maior que o outro! </p>";
    }

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   


