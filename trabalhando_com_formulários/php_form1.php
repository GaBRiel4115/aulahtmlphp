<?php

$nome = $_POST["n"];
$sobrenome = $_POST["sn"];
$completo = $nome . " " . $sobrenome;

    echo "Olá $completo, seja bem vindo(a).";