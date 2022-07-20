<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //11) Ler um número e verificar se ele está no intervalo de 10 a 500.
    
    $num= 0;
    $resultado = 0;

    $num = $_POST['num'];
   
    
    if($num >= 10 && $num <= 500){
        $resultado = "<h4> O número ($num) está no intervalo entre 10 e 500. </h4>";
    } else {
        $resultado = "<h4> O número ($num) não está no intervalo entre 10 e 500. </h4>";
    }

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   