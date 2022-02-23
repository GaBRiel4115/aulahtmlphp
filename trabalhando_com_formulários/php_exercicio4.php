<?php
$salario = $_POST["salario"];

$conta = $salario * 0.08;
$liquido = $salario - $conta;

    echo "O salário bruto do funcionário é $salario e o desconto(8%) é $conta";
    echo "<br/>";
    echo "<hr>";
    echo "Seu salário liquido é $liquido";