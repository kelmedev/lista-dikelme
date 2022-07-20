<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //4) Informar se um número digitado pelo usuário é positivo, negativo ou nulo.

    $num = 0;
    $resultado = 0;
    $num = $_POST['num'];
    
    if($num > 0) {
        $resultado = "<h4>O número digitado ($num) é positivo!</h4>";
    } elseif($num == 0) {
        $resultado = "<h4>O número digitado ($num) é nulo!</h4>";
    } else
        $resultado ="<h4>O número digitado ($num) é negativo!</h4>";

    echo 
        "<div class='container'> 
            <h1>Resultado:</h1>
            $resultado
            <h3> Obrigado por utilizar nosso programa! </h3> 
        </div>";
    
?>