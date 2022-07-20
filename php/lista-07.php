<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">

<?php
    //7) Ler três valores inteiros e verificar se eles podem ser os lados de um triângulo, exibindo na tela o resultado: formam ou não um triângulo. Por propriedade, um triângulo é válido (ou seja, três valores podem formar um triângulo) se o comprimento de cada lado for menor do que a soma do comprimento dos outros dois lados. Se os valores informados pelo usuário puderem formar um triângulo, exiba na tela qual tipo de triângulo é formado: equilátero (todos os lados iguais), isóscele (dois lados iguais) ou escaleno (todos os lados diferentes).

    $resultado = 0;
    $lado1 = 0;
    $lado2 = 0;
    $lado3 = 0;

    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    if (($lado1 > $lado2 + $lado3) || ($lado2 > $lado1 + $lado3) || ($lado3 > $lado1 + $lado2)){
        $resultado = "<h4> Estes valores não podem formar um triângulo. </h4>";
    } else {          
        if (($lado1 ==  $lado2) && ($lado1 == $lado3)) {
            $resultado = "<h4> O triângulo é um triângulo equilátero. </h4>";
        } elseif (($lado1 == $lado2) || ($lado1 == $lado3) || ($lado2 == $lado3)) {
            $resultado = "<h4> O triângulo formado é isóceles. </h4>";
        } else {
            $resultado = "<h4> O triângulo formado é escaleno. </h4>";
        }
    }    

    echo 
    "<div class='container'> 
        <h1>Resultado:</h1>
        $resultado
        <h3> Obrigado por utilizar nosso programa! </h3> 
    </div>";



?>