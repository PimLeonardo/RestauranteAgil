<?php

session_start();

$nome_produto = $_POST["nome_produto"];
$categoria_produto = $_POST["categoria_produto"];
$valor_produto = $_POST["valor_produto"];
$foto_produto = $_POST["foto_produto"];
$info_produto = $_POST["info_produto"];

try {
    include("conexao_bd.php");
    
    $sql = "INSERT INTO item_produto (nome, categoria, valor, foto, info_adicional, id_usuario) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    // TODO pegar id do usuario logado
    $stmt->execute([$nome_produto, $categoria_produto, $valor_produto, $foto_produto, $info_produto, null]);

    echo "<script>alert('Produto cadastrado com sucesso');location.href='produto.php';</script>";

} catch (PDOException $e) {
    echo "Inserção falhou: " . $e->getMessage();
}

$conn = null;

?>