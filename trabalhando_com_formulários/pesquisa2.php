<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>CRUD - Pesquisa 1</title>
    
  </head>
  <body>
    <?php
        $pesquisa = $_POST['busca'] ?? '';

        include "conect2.php";

        $sql = "SELECT * FROM usuarios WHERE nome like '%$pesquisa%' ";
        $dados = mysqli_query($conexao, $sql);

    ?>

    <div class="container dark">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <form class="d-flex" action="pesquisa1.php" method="POST">
                <input
                  class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca" autofocus>
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form>
            </div>
          </nav>
          <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Funções</th>
              </tr>
            </thead>
            <tbody>
            <?php
                while($linha  = mysqli_fetch_assoc($dados)) {
                  $codigo_pessoa         = $linha['id'];
                  $nome                  = $linha['nome'];
                  $endereco              = $linha['endereco'];
                  $telefone              = $linha['telefone'];
                  $email                 = $linha['email'];
                    
                  echo "<tr>
                          <td>$nome</td>
                          <td>$endereco</td>
                          <td>$telefone</td>
                          <td>$email</td>
                          <td>  
                            <a href='Cadastro_edit.php?id=$codigo_pessoa' class='btn btn-success btn-sm'> Editar </a>
                            <a href='#' class='btn btn-danger btn-sm'> Excluir </a>                        
                          </td>
                        </tr>";
                }
              ?>

          </table>
        </div>
      </div>
    </div>
  </body>
</html>