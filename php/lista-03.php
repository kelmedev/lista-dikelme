<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="php/favicon.ico">

<?php
    //3) Ler um valor de hora com minutos, separado por ":" (dois pontos), e informar quantos minutos passaram desde o início do dia. Exemplo: em 13:50, 13 é o valor de hora e 50 é o valor de minutos, e se passaram 830 minutos desde o início do dia. A entrada será 13:50 e o programa precisa separa 13 como valor de hora e 50 como valor de minutos antes do processamento matemático necessário.

    $num = 0;
    $resultado = 0;
    $tempo = $_POST['tempo'];
    $hora = 0;
    $minuto = 0;
    

    $hora = date('H', strtotime($tempo));
    $minuto = date('i',  strtotime($tempo));

    $tempo = ($hora * 60 ) + $minuto;

    $resultado = "<h4> Se passaram ($tempo) minutos, desde o início do dia! </h4>";

    echo 
        "<div class='container'> 
            <h1>Resultado:</h1>
            $resultado
            <h3> Obrigado por utilizar nosso programa! </h3> 
        </div>";
    
?>