-- Criar o banco de dados
CREATE DATABASE HospitalSystem;

-- Usar o banco de dados
USE HospitalSystem;

-- Tabela de Usuários
CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Médicos
CREATE TABLE Doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    specialty VARCHAR(100) NOT NULL,
    bio TEXT,
    photo_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Agendamentos
CREATE TABLE Appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    doctor_id INT NOT NULL,
    appointment_date DATETIME NOT NULL,
    reason TEXT,
    status ENUM('Pending', 'Confirmed', 'Cancelled') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id) ON DELETE CASCADE,
    FOREIGN KEY (doctor_id) REFERENCES Doctors(id) ON DELETE CASCADE
);

-- Tabela de Mensagens de Contato
CREATE TABLE ContactMessages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(150),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Tokens de Recuperação de Senha
CREATE TABLE PasswordResetTokens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    token VARCHAR(255) NOT NULL,
    expires_at DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id) ON DELETE CASCADE
);

-- Dados de exemplo (opcional)

-- Inserir usuários de teste
INSERT INTO Users (name, email, password, phone)
VALUES 
('João da Silva', 'joao@example.com', 'hashed_password_1', '11987654321'),
('Maria Oliveira', 'maria@example.com', 'hashed_password_2', '11912345678');

-- Inserir médicos de teste
INSERT INTO Doctors (name, specialty, bio, photo_url)
VALUES
('Dr. João Silva', 'Cardiologista', 'Especialista em doenças do coração', 'assets/images/médicos/dr-joao.jpg'),
('Dra. Ana Lima', 'Pediatra', 'Atende crianças e adolescentes', 'assets/images/médicos/dra-ana.jpg');

-- Inserir agendamentos de teste
INSERT INTO Appointments (user_id, doctor_id, appointment_date, reason)
VALUES
(1, 1, '2024-12-15 10:00:00', 'Consulta de rotina'),
(2, 2, '2024-12-16 14:30:00', 'Check-up infantil');

-- Inserir mensagens de contato de teste
INSERT INTO ContactMessages (name, email, subject, message)
VALUES
('Carlos Souza', 'carlos@example.com', 'Dúvida sobre exames', 'Gostaria de saber quais exames são realizados no hospital.'),
('Ana Paula', 'ana@example.com', 'Agendamento de consulta', 'Preciso agendar uma consulta com o cardiologista.');
