<select name="medico_id" id="medico">
            <?php
            $conn = new mysqli('localhost', 'usuario', 'senha', 'clinica');
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            $sql = "SELECT id, nome FROM medicos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"]. "'>" . $row["nome"]. "</option>";
                }
            } else {
                echo "<option>Nenhum médico encontrado</option>";
            }
            $conn->close();
            ?>
        </select>


<?php
$conn = new mysqli('localhost', 'usuario', 'senha', 'clinica');
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$medico_id = $_POST['medico_id'];
$paciente_nome = $_POST['paciente_nome'];
$data_hora = $_POST['data_hora'];

$sql = "INSERT INTO agendamentos (medico_id, paciente_nome, data_hora) VALUES ('$medico_id', '$paciente_nome', '$data_hora')";

if ($conn->query($sql) === TRUE) {
    echo "Agendamento realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
