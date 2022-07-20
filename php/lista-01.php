<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="php/favicon.ico">

<?php
    //1) Ler um número e imprimir o sucessor e o antecessor.

    $num = 0;
    $resultado = 0;
    $num = $_POST['num'];
    $antecessor = $num - 1;
    $sucessor = $num + 1;

    $resultado = "<h4> O antecessor de ($num) é ($antecessor) e o sucessor é ($sucessor).</h4>";

    echo 
        "<div class='container'> 
            <h1>Resultado:</h1>
            $resultado 
            <h3> Obrigado por utilizar nosso programa! </h3> 
        </div>";
    
?>