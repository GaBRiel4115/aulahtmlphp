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
    <title> CSI 2022</title>
    
  </head>
  <body>
    <?php
        $pesquisa = $_POST['busca'] ?? '';

        include "conexao.php";

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
              <th scope="col">Cartão ID</th>
              <th scope="col">Nome</th>
              </tr>
            </thead>
            <tbody>
            <?php
                while($linha  = mysqli_fetch_assoc($dados)) {
                  $cartao_respota         = $linha['cartao_resposta'];
                  $nome                  = $linha['nome'];
                  echo "<tr>
                          <td>$codigo_pessoa</td>
                          <td>$nome</td>
                          <td>  
                            <a href='Cadastro_edit.php?id=$cartao_respota' class='btn btn-success btn-sm'> Editar </a>
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