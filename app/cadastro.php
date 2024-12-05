<?php
include('includes/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = $_POST['tipo'];

    $sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => $nome, 'email' => $email, 'senha' => $senha, 'tipo' => $tipo]);

    echo "Cadastro realizado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <label for="tipo">Você é:</label>
        <select id="tipo" name="tipo">
            <option value="paciente">Paciente</option>
            <option value="medico">Médico</option>
        </select>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
