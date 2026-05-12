-- ============================================================
-- INIT.SQL - Inicialização do Banco de Dados
-- ============================================================
-- Este arquivo é executado automaticamente quando o container
-- do MySQL sobe pela primeira vez. Ele cria as tabelas e
-- insere dados iniciais necessários para o projeto.
--
-- LOCALIZAÇÃO: docker/init.sql
-- EXECUÇÃO: Automática via docker-compose.yml
-- ============================================================

-- Cria a tabela de usuários (exemplo básico)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insere um usuário de exemplo
INSERT INTO users (name, email, password) VALUES
('Admin', 'admin@academia.com', '$2y$10$examplehashedpassword'); -- Senha: admin123 (hash exemplo)