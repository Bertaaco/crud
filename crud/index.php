<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crud Simples</title>
</head>
<body>
    <header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/1/10/Palmeiras_logo.svg" alt="Palmeiras">
    <h1>Sociedade Esportiva Palmeiras </h1>
</header>
    <h1>Gerenciamento de Jogadores do Palmeiras</h1>
    <form action="store.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <label for="email">numero da camisa:</label>
        <input type="number" name="email" required>
        <input type="submit" value="Adicionar Jogador">
    </form>
    <hr>
    <h2>Lista dos Jogadores</h2>
    <div id="usuarios">
        <!-- Inclui a lista de usuarios  -->
        <?php include 'read.php'; ?>
    </div>

</body>
</html>