-- ============================================================
-- SCRIPT DE INICIALIZAÇÃO DO BANCO DE DADOS
-- ============================================================

USE projeto_academia;

-- Cria a tabela de usuários do sistema.
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL,
    level TINYINT(1) NOT NULL DEFAULT 0,  -- 0 = usuário comum, 1 = administrador
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Exemplo: inserir um usuário administrador
-- A senha deve ser hash (bcrypt ou similar) gerada pelo PHP
INSERT INTO usuarios (name, email, pass, level)
VALUES ('Admin Teste', 'admin@teste.com', '$2y$10$EXEMPLOHASHDAQUI', 1);