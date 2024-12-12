CREATE DATABASE clinica;
USE clinica;

CREATE TABLE medicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    especialidade VARCHAR(100),
    telefone VARCHAR(20)
);

CREATE TABLE agendamentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    medico_id INT,
    paciente_nome VARCHAR(100),
    data_hora DATETIME,
    FOREIGN KEY (medico_id) REFERENCES medicos(id)
);


INSERT INTO medicos (nome, especialidade, telefone) VALUES
('Dr. João Silva', 'Cardiologista', '1234-5678'),
('Dra. Maria Oliveira', 'Dermatologista', '8765-4321');
