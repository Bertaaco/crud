<?php
include 'conexao.php';

if (isset ($_GET['id'])) { // Verifica se o ID do usuário foi fornecido
    $id = $_GET['id']; 

    // Obtém os dados do usuário para preencher o formulário
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Atualiza os dados do usuário no banco de dados
        $sql = "UPDATE usuarios SET nome='$nome', email='$email' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php'); // Redireciona de volta para a página inicial
        } else {
            echo "Erro ao atualizar Jogador: " . $conn->error; // Mensagem de erro detalhada
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Jogador</title>
</head>
<body>
    <h1>Atualizar Jogador</h1>
    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $user['nome']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <br>
        <input type="submit" value="Atualizar Usuário">
    </form>
    <a href="index.php">Cancelar</a>
</body>
</html>