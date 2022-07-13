<link rel="stylesheet" type="text/css" href="style.css"/>

<?php
    //5) Verificar qual dentre dois números distintos digitados pelo usuário é maior e qual é menor, mostrando isso ao final da execução. Considere que nunca haverá entradas iguais.

    $num1 = 0;
    $num2 = 0;
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    echo "<h1> Resultado: <h1>";
  
    if($num1 > $num2){
        echo "$num1 é maior que $num2!";
    } elseif ($num1 < $num2) {
        echo "$num2 é maior que $num1!";
    } else {
        echo "<h2> Os dois números são iguais, então um não pode ser maior que o outro! <h2>";
    }

    echo "<p> Obrigado por utilizar nosso programa! <p>";


?>   


