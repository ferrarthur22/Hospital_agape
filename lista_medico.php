<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Médicos</title>
</head>
<body>
    <h1>Lista de Médicos</h1>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Especialidade</th>
            <th>Telefone</th>
        </tr>
        <?php
        $conn = new mysqli('localhost', 'usuario', 'senha', 'clinica');
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT nome, especialidade, telefone FROM medicos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["nome"]. "</td><td>" . $row["especialidade"]. "</td><td>" . $row["telefone"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum médico encontrado</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
