<?php
$numero1 = $_POST["n"];
$numero2 = $_POST["n2"];

$conta = ($numero1 + $numero2) / 2;
$conta_metade = ($numero1 - $numero2) / 2;

    echo "A Média Aritmética entre os numeros $numero1 e $numero2 é: $conta";
    echo "<br/>";
    echo "<hr>";
    echo "A metade diferença entre eles é $conta_metade";