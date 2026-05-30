-- ============================================================
-- SCRIPT DE INICIALIZAÇÃO DO BANCO DE DADOS
-- ============================================================

USE projeto_academia;

-- Cria a tabela de usuários do sistema.
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL,
    level TINYINT(1) NOT NULL DEFAULT 0,  -- 0 = usuário comum, 1 = administrador
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Cria a tabela categorias

CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Cria a tabela de produtos
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

-- Exemplo: inserir um usuário administrador
-- A senha deve ser hash (bcrypt ou similar) gerada pelo PHP
INSERT INTO usuarios (name, email, pass, level)
VALUES ('Admin Teste', 'admin@teste.com', '$2y$10$EXEMPLOHASHDAQUI', 1);