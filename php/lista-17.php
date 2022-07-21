<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //17) Ler um número e mostrar todos os ímpares menores que ele em ordem decrescente, até 1.

    $num = 0;
    $resultado = 0;
    $num = $_POST['num'];
    $num =$num + 1;

    echo "<h1>Resultado:</h1>";
    while ($num > 1){
       $num =$num - 1; 
        if ($num % 2 != 0) {
            echo "<br> <h4>($num)</h4>";
        }
    }
    echo "<h3> Obrigado por utilizar nosso programa! </h3>"

?>   