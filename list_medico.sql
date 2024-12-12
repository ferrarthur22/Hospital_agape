CREATE DATABASE clinica;
USE clinica;

CREATE TABLE medicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    especialidade VARCHAR(100),
    telefone VARCHAR(20)
);


INSERT INTO medicos (nome, especialidade, telefone) VALUES
('Dr. João Silva', 'Cardiologista', '1234-5678'),
('Dra. Maria Oliveira', 'Dermatologista', '8765-4321');
