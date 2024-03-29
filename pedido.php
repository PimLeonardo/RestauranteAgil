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
                                <form action="cadastrar_pedido.php" method="POST">
                                    <div class="form-group">
                                        <label for="nome_produto" class="form-label">Nome do produto</label>
                                        <input name="nome_produto" type="text" class="form-control" id="nome_produto" required placeholder="Digite o nome do produto">
                                    </div>
                                    <div class="form-group">
                                        <label for="qtd_produto" class="form-label">Quantidade</label>
                                        <input name="qtd_produto" type="number" class="form-control" id="qtd_produto" required min="1" max="10" placeholder="Quantidade">
                                    </div>
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <textarea name="observacao" class="form-control" rows="3" id="observacao" placeholder="Descrição" maxlength="400"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="preco_produto" class="form-label">Preço</label>
                                        <input name="preco_produto" type="number" class="form-control" id="preco_produto" min="0" max="9999" step=".01" required placeholder="00.00$">
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
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>