<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Depoimentos de Pacientes</h1>
    <div id="feedbacks">
        <?php
        // Conecta ao banco de dados
        $conn = new mysqli('localhost', 'usuario', 'senha', 'clinica');
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Seleciona os feedbacks da tabela 'feedbacks'
        $sql = "SELECT paciente_nome, comentario, data FROM feedbacks ORDER BY data DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Exibe cada feedback
            while($row = $result->fetch_assoc()) {
                echo "<div class='feedback'>";
                echo "<h3>" . $row["paciente_nome"]. "</h3>";
                echo "<p>" . $row["comentario"]. "</p>";
                echo "<small>Enviado em: " . $row["data"]. "</small>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhum feedback encontrado</p>";
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>
    </div>
</body>
</html>
