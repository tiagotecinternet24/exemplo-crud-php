<?php
require_once "conecta.php";

function listarProdutos(PDO $conexao):array {
    // $sql = "SELECT * FROM produtos";
    $sql = "SELECT 
                produtos.id, produtos.nome AS produto, 
                produtos.preco, produtos.quantidade,
                (produtos.preco * produtos.quantidade) AS total,
                fabricantes.nome AS fabricante
            FROM produtos INNER JOIN fabricantes
            ON produtos.fabricante_id = fabricantes.id
            ORDER BY produto";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao carregar produtos: ".$erro->getMessage());
    }
}