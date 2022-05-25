<?php
    include "coonexao.php";

    if (mysqli_connect_error()) {
        echo "Problemas para conectar no banco. Verifique os dados novamente!";
        die();
    }
    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $sql = "UPDATE inscritos set nome = '$nome', cartao_resposta = '$cartao_resposta' WHERE id = '$id'";

    $conexao->query($sql);
    $conexao->close();

    echo "Alterado com sucesso!";

    header("refresh:1;url=pesquisa2.php");
    ?>