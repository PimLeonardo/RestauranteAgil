<?php

session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario_autenticado = false;

try {
    include("conexao_bd.php");
    
    $stmt = $conn->prepare("SELECT id FROM usuario WHERE email=:email AND senha=md5(:senha)");
    $stmt->bindParam(':email',$email, PDO::PARAM_STR);
    $stmt->bindParam(':senha',$senha, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetchAll();
    $qtd_usuarios = count($result);

    if($qtd_usuarios == 1) {
        $usuario_autenticado = true;
    } else if($qtd_usuarios == 0) {
        $usuario_autenticado = false;
    }

} catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}

$conn = null;

if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');
 }else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
 }

?>