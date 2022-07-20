<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="php/favicon.ico">

<?php
    //2) Entrar com o lado de um quadrado e imprimir o perímetro e a área.

  
    $resultado = 0;
    $lado = $_POST['lado'];
    $perimeter = $lado * 4;
    $area = $lado * $lado;

    $resultado = "<h4> A área do quadrado de lado ($lado cm) é ($area cm²) e o perímetro é ($perimeter cm).</h4>";

    echo 
        "<div class='container'> 
            <h1>Resultado:</h1>
            $resultado 
            <h3> Obrigado por utilizar nosso programa! </h3> 
        </div>";
    
?>