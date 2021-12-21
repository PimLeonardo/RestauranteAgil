<?php

session_start();

$nome_produto = $_POST["nome_produto"];
$qtd = $_POST["qtd_produto"];
$observacao = $_POST["observacao"];
$preco_produto = $_POST["preco_produto"];

try {
    include("conexao_bd.php");
    
    $sql = "INSERT INTO item_pedido (id_usuario, nome_produto, observacao, preco_und, quantidade) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    // TODO pegar id do usuario logado
    $stmt->execute([null, $nome_produto, $observacao, $preco_produto, $qtd]);

    echo "<script>alert('Pedido realizado com sucesso');location.href='home.php';</script>";

} catch (PDOException $e) {
    echo "Inserção falhou: " . $e->getMessage();
}

$conn = null;

?>