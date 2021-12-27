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
    <div class="container">
        <div class="row">
            <div class="card-pedidos">
                <div class="card">
                    <div class="card-header">
                        Fazer pedidos
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
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
                                        <input name="valor_produto" type="number" class="form-control" id="valor_produto" min="0" max="9999" step=".01" required placeholder="Digite o valor do produto">
                                    </div>
                                    <div class="form-group">
                                        <label for="foto_produto" class="form-label">Foto</label>
                                        <input name="foto_produto" type="file" class="form-control" id="foto_produto">
                                    </div>
                                    <div class="form-group">
                                        <label>Informações adicionais</label>
                                        <textarea name="info_produto" class="form-control" rows="3" id="info_produto" placeholder="Digite informações adicionais do produto" maxlength="400"></textarea>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-dark btn-block btn-block" href="home.php">Voltar</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-dark btn-block btn-block" type="submit">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php
        include("conexao_bd.php");

        $stmt = $conn->prepare("SELECT * FROM item_produto");
        $stmt->execute();
        $resultado["produtos"] = $stmt->fetchAll();
        ?>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Informações adicionais</th>
                    <th scope="col">Data e hora</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($resultado["produtos"] as $p) : ?>
                    <tr>
                        <th><?= $p["id"]; ?></th>
                        <td><?= $p["foto"]; ?></td>
                        <td><?= $p["nome"]; ?></td>
                        <td><?= $p["categoria"]; ?></td>
                        <td><?= $p["valor"]; ?></td>
                        <td><?= $p["info_adicional"]; ?></td>
                        <td><?= $p["data_hora"]; ?></td>
                        <td>
                            <button class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>