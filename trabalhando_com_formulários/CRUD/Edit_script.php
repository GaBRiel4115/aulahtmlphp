<?php
    include "conect2.php";

    if (mysqli_connect_error()) {
        echo "Problemas para conectar no banco. Verifique os dados novamente!";
        die();
    }
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios set nome = '$nome', endereco = '$endereco', telefone = '$telefone', email = '$email' WHERE id = '$id'";

    $conexao->query($sql);
    $conexao->close();

    echo "Alterado com sucesso!";

    header("refresh:1;url=pesquisa2.php");
    ?>