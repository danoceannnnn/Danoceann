<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = $_POST['nome_produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    
    echo "Produto cadastrado com sucesso: $nome_produto, $descricao, R$ $preco";
}
?>