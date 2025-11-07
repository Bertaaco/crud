<?php
// Dados da conexão com o banco
$servername = "localhost";
$username = "root";       // ou outro usuário do seu MySQL
$password = "Senai@118";           // senha do banco
$dbname = "crud";   // nome do banco

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
// if ($conn->connect_error) {
//     die("Falha na conexão: " . $conn->connect_error);
// }
// else {
//     echo "Conexão bem-sucedida!";
// }

?>