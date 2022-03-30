<?php
$nome = $_POST['nome'];

//conexão com banco de dados
$nomeServidor = 'localhost';
$nomeUsuario = 'root';
$senha = "";
$nomeBanco = 'contatos';

$conexao = mysqli_connect($nomeServidor,$nomeUsuario,$senha, $nomeBanco);

$sql = "SELECT * FROM clientes where nome = '$nome'";
$result = mysqli_query($conexao, $sql);

if(mysqli_num_rows($result)==0) {
    echo "O cliente não está cadastrado";
} else {
    
    while ($row = mysqli_fetch_array($result)) {
        echo "id: " . $row["id"] . " - Nome: " . $row["nome"]."<br>". "- Email: " . $row["email"] ."<br>";
    }
    mysqli_close($conexao);

}