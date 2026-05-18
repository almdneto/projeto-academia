-- ============================================================
-- SCRIPT DE INICIALIZAÇÃO DO BANCO DE DADOS
-- ============================================================
-- Este arquivo SQL é executado AUTOMATICAMENTE pelo MySQL
-- quando o container sobe pela PRIMEIRA VEZ.
--
-- Ele é responsável por criar a ESTRUTURA do banco (as tabelas).
-- Para inserir o usuário administrador de teste, acesse:
--   http://localhost:8080/seed.php   (após subir os containers)
-- ============================================================

-- Garante que estamos usando o banco de dados correto.
-- O nome "aulaLogin" foi definido no docker-compose.yml.
USE aulaLogin;

-- Cria a tabela de usuários do sistema.
-- "IF NOT EXISTS" evita erro caso o script seja rodado mais de uma vez.
CREATE TABLE IF NOT EXISTS usuarios (

    -- id: identificador único de cada usuário
    -- AUTO_INCREMENT: o banco gera o número automaticamente (1, 2, 3, ...)
    -- PRIMARY KEY: garante que não existam dois usuários com o mesmo id
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- nome: nome completo do usuário (obrigatório - NOT NULL)
    nome VARCHAR(100) NOT NULL,

    -- email: endereço de e-mail usado no login
    -- UNIQUE: garante que não existam dois usuários com o mesmo e-mail
    email VARCHAR(150) NOT NULL UNIQUE,

    -- senha: armazena o HASH da senha gerado pelo PHP
    -- NUNCA armazene a senha em texto puro! Sempre use hash!
    -- VARCHAR(255) é o tamanho recomendado para hashes bcrypt do PHP
    senha VARCHAR(255) NOT NULL,

    -- criado_em: data e hora em que o registro foi criado
    -- DEFAULT CURRENT_TIMESTAMP: preenchido automaticamente pelo banco
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);