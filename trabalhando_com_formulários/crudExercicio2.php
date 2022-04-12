<?php
    include "conect2.php";

    if (mysqli_connect_error()) {
        echo "Problemas para conectar no banco. Verifique os dados novamente!";
        die();
    }

    $sql = "INSERT INTO usuario (nome,email,telefone,endereco)" . "VALUES ('{$_POST["nome"]}','{$_POST["email"]}','{$_POST["telefone"]}','{$_POST["endereco"]}' )";

    $conexao->query($sql);
    $conexao->close();

    header("refresh:1;url=crudExercicio.php");
    ?>