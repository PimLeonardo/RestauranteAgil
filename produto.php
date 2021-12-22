<?php require_once "valida_acesso.php" ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Ágil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <h2 src="logo.png" width="30" height="30" class="d-inline-block align-top text-Light" alt="">Restaurante Ágil</h2>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="logoff.php">SAIR</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h2>Fazer pedidos</h2>
        <form action="cadastrar_produto.php" method="POST">
            <div class="form-group">
                <label for="nome_produto" class="form-label">Nome do produto</label>
                <input name="nome_produto" type="text" class="form-control" id="nome_produto" required placeholder="Digite o nome do produto">
            </div>
            <div class="form-group">
                <label for="categoria_produto" class="form-label">Categoria</label>
                <input name="categoria_produto" type="text" class="form-control" id="categoria_produto" required placeholder="Digite a categoria do produto">
            </div>
            <div class="form-group">
                <label for="valor_produto" class="form-label">Valor</label>
                <input name="valor_produto" type="number" class="form-control" id="valor_produto" min="0" max="9999" required placeholder="Digite o valor do produto">
            </div>
            <div class="form-group">
                <label for="foto_produto" class="form-label">Foto</label>
                <input name="foto_produto" type="file" class="form-control" id="foto_produto">
            </div>
            <div class="form-group">
                <label>Informações adicionais</label>
                <textarea name="info_produto" class="form-control" rows="3" id="info_produto" placeholder="Digite informações adicionais do produto" maxlength="400"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Adicionar produto</button>
        </form> 
        <br>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Informação adicional</th>
                    <th scope="col">Data e hora</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>@teste</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>@teste</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>@teste</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>