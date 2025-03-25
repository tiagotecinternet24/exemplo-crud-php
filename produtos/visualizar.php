<?php // produtos/visualizar.php
require_once "../src/funcoes-produtos.php";
$listaDeProdutos = listarProdutos($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Visualização</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-2 shadow-lg rounded pb-1">
        <h1><a class="btn btn-dark btn-lg" href="../index.php">Home</a> Produtos | SELECT</h1>

        <hr>
        <h2>Lendo e carregando todos os produtos.</h2>

        <p><a class="btn btn-primary btn-sm" href="inserir.php">Inserir novo produto</a></p>

        <div class="row">
            <div class="col-sm-6">
                <article class="bg-body-secondary p-2">
                    <h3>Nome do produto...</h3>
                    <h4>Fabricante do produto...</h4>
                    <p><b>Preço: </b> do produto</p>
                    <p><b>Quantidade: </b> do produto</p>
                </article>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>