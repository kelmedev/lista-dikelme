<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //09) Criar uma calculadora para as quatro operações básicas entre dois números, fazendo uma operação por vez/execução do programa, conforme operação (sinal) escolhida pelo usuário.
    
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;


    $sum = $_POST['sum'];
    $divide = $_POST['divide'];
    $multiplicate = $_POST['multiplicate'];
    $subtract = $_POST['subtract'];


    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if($sum != 0){
       $sum == $num1 + $num2;
       $resultado = "<h4> O resultado é da soma é $sum.</h4>";
    }

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   

