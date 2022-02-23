<?php
$numero1 = $_POST["n"];
$numero2 = $_POST["n2"];
$numero3 = $_POST["n3"];

$conta = ($numero1 + $numero2 + $numero3)/ 3;
    echo "A Média Aritimética é ", number_format($conta,1);