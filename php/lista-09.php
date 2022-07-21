<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //9) Criar uma calculadora para as quatro operações básicas entre dois números, fazendo uma operação por vez/execução do programa, conforme operação (sinal) escolhida pelo usuário.
    
    $num1 = 0;
    $num2 = 0;
    $sum = 0;
    $sub = 0;
    $resultado = 0;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
   
    if($_POST['options'] == 1){
        
       $sum = $num1 + $num2;
       $resultado = "<h4> O resultado da soma é $sum.</h4>";
    }

    if($_POST['options'] == 2){
        $sub = $num1 - $num2;
        $resultado = "<h4> O resultado da subtração é $sub.";
    }

    if($_POST['options'] == 3){
        $mult = $num1 * $num2;
        $resultado = "<h4> O resultado da multiplicação é $mult.";
    }

    if($_POST['options'] == 4){
        if($num2 != 0) {
            $div = $num1 / $num2; 
            $resultado = "<h4> O resultado da divisão é $div. </h4>";
        } else {
            $resultado = "<h4> Jamais divida por 0. </h4>";
        }
    }



    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   

