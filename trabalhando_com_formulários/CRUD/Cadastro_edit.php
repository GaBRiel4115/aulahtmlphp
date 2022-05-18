<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="meucss.css">
</head>
<body>
<!--form method = "POST" action="crudExercicio2.php">
        Nome: <br/>
        <input type = "text" size="30" name="nome"/><br/>

        Email: <br/>
        <input type = "text" size="30" name="email"/><br/><br/>

        Telefone: <br/>
        <input type = "text" size="30" name="telefone"><br/><br/>

        <input type = "submit" value = "cadastrar"/><br/>


    </form -->
    <?php 

        include "conect2.php";

        $id    = $_GET['id'] ?? '';
        $sql   = "SELECT * FROM usuarios WHERE id = $id";

        $dados = mysqli_query($conexao, $sql);
        $linha = mysqli_fetch_assoc($dados);
    ?>



        <div class="container">

            <form  method = "POST" action="Edit_script.php">
                
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="nome" value="<?php echo $linha['nome'];?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="email"  value="<?php echo $linha['email'];?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="telefone"  value="<?php echo $linha['telefone'];?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Endereço</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="endereco"  value="<?php echo $linha['endereco'];?>">
                    </div>
                </div>
                </div>
                <div class="form-grupo">
                    <button type="submit" class="btn btn-primary">Salvar alterações</button>
                    <input type= "hidden" name="id" value="<?php echo $linha['id']?>">
                </div>
            </form>
        </div>








</body>
</body>
</html>