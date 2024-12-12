<?php
$conn = new mysqli('localhost', 'usuario', 'senha', 'clinica');
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$paciente_nome = $_POST['paciente_nome'];
$comentario = $_POST['comentario'];

$sql = "INSERT INTO feedbacks (paciente_nome, comentario) VALUES ('$paciente_nome', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback enviado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

-- Criar o script PHP para processar o envio de feedbacks
<?php
$conn = new mysqli('localhost', 'usuario', 'senha', 'clinica');
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$paciente_nome = $_POST['paciente_nome'];
$comentario = $_POST['comentario'];

$sql = "INSERT INTO feedbacks (paciente_nome, comentario) VALUES ('$paciente_nome', '$comentario')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback enviado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

--