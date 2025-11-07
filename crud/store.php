<?php

// --------------------------------Arquivo que serve para linkar tudo------------------------


include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Verifica se o formulário foi enviado
    $nome = $_POST['nome']; // Obtém os dados do formulário
    $email = $_POST['email']; // Obtém os dados do formulário
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')"; // Prepara a query SQL para inserção

    if ($conn->query($sql) === TRUE) { // Executa a query e verifica se foi bem-sucedida
        header( "Location: index.php" ); // Redireciona de volta para a página inicial
    } else {
        echo "Erro: " . "<br>" . $conn->error; // Mensagem de erro detalhada
    }
}



?>  