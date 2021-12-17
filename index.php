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
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form id="form_login" method="POST" action="login.php">
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="password" id="senha" name="senha" placeholder="Senha" class="form-control">
                            </div>

                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                                <div class="text-danger">
                                    Usuário ou senha inválido(s)
                                </div>

                            <?php } ?>

                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                                <div class="text-danger">
                                    Faça login antes de acessar as outras páginas
                                </div>

                            <?php } ?>

                            <input type="submit" id="btt_submit" value="Entrar" class="btn btn-dark btn-block">

                        </form>
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