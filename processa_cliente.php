<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    echo "Cliente cadastrado com sucesso: $nome, $email, $telefone";
}
?>