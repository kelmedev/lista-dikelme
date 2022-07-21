<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //13) Mostrar todos os números pares no intervalo entre 1 e 1000.
  

    $num = 1; 
    $resultado = 0;

    echo "<h1>Resultado:</h1>";
    while ($num <= 1000){ 
        $num = $num + 1;  
        if ($num % 2 == 0) {
            echo "<br><h4>($num)</h4> "; 
        }
    } 
    echo "<h3> Obrigado por utilizar nosso programa! </h3>";
   

?>   