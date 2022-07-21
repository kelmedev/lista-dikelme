<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //14) Ler sete números digitados pelo usuário e imprimir o quadrado de cada um.

    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    $num4 = 0;
    $num5 = 0;
    $num6 = 0;
    $num7 = 0;
    $resultado = 0;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];
    $num6 = $_POST['num6'];
    $num7 = $_POST['num7'];

    while($resultado == 0){
        $num1 = $num1 * $num1;
        $num2 = $num2 * $num2;
        $num3 = $num3 * $num3;
        $num4 = $num4 * $num4;
        $num5 = $num5 * $num5;
        $num6 = $num6 * $num6;
        $num7 = $num7 * $num7;

        $resultado = "<h4> 
        1º número: ($num1);<br>
        2º número: ($num2);<br>
        3º número: ($num3);<br>
        4º número: ($num4);<br>
        5º número: ($num5);<br>
        6º número: ($num6);<br>
        7º número: ($num7).<br>
         </h4>";
    }

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";

?>   