<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //19) Ler dois números, verificar qual o menor e qual o maior e mostrar todos os números no intervalo entre eles em ordem crescente e, em seguida, em ordem decrescente. 
    
    $num1 = 0;
    $num2 = 0;
    $resultado = 0;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2) {
        $maior1 = $num1;
        $menor1 = $num2;
        $maior2 = $num1;
        $menor2 = $num2;
    } else {
        $maior1 = $num2;
        $menor1 = $num1;
        $maior2 = $num2;
        $menor2 = $num1;
    }

    echo "<h1>Resultado:</h1>";
    echo "<h4>($menor1)</h4>";
    while ($menor2 < $maior2) {
        $menor2 = $menor2 + 1;
        echo "<h4> ($menor2) </h4>";
    }
  
    echo "<br><h4>($maior1)</h4>";
    while ($maior1 > $menor1) {
    
        $maior1 = $maior1 - 1;
        echo "<h4> ($maior1) </h4>";
    }
    echo "<h3> Obrigado por utilizar nosso programa! </h3>"

?>   