-- Criando o banco de dados
CREATE DATABASE IF NOT EXISTS `techsuplementos`
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE `techsuplementos`;

-- Tabela usuario (necessária antes da compra)
CREATE TABLE IF NOT EXISTS usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  nome VARCHAR(50) DEFAULT NULL,
  cpf VARCHAR(14) NOT NULL UNIQUE,
  telefone VARCHAR(50) DEFAULT NULL,
  senha VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela produtos (renomeada corretamente, corrigido erro de sintaxe)
CREATE TABLE IF NOT EXISTS produtos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  descricao TEXT,
  preco DECIMAL(10,2),
  sabor TEXT,
  catalogo ENUM('creatina', 'whey', 'pre_treino', 'top_5', 'novidades') NOT NULL,
  imagem VARCHAR(255),
  status BOOLEAN DEFAULT TRUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela estoque (referencia produto)
CREATE TABLE IF NOT EXISTS estoque (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255),
  quantidade INT,
  id_produto INT,
  FOREIGN KEY (id_produto) REFERENCES produtos(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela compra
CREATE TABLE IF NOT EXISTS compra (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT NOT NULL,
  data_compra DATETIME DEFAULT CURRENT_TIMESTAMP,
  forma_pagamento VARCHAR(50),
  total DECIMAL(10,2),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela item_compra (depende de compra e estoque)
CREATE TABLE IF NOT EXISTS item_compra (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_compra INT NOT NULL,
  id_produto INT NOT NULL,
  quantidade INT NOT NULL,
  preco_unitario DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (id_compra) REFERENCES compra(id),
  FOREIGN KEY (id_produto) REFERENCES produtos(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela feedback
CREATE TABLE IF NOT EXISTS feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  avaliacoes TEXT DEFAULT NULL,
  id_usuario INT,
  FOREIGN KEY (id_usuario) REFERENCES usuario(id) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela gestao_pedido (renomeada corretamente)
CREATE TABLE IF NOT EXISTS gestao_pedido (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_compra INT NOT NULL,
  status_pagamento VARCHAR(100),
  status_envio VARCHAR(100),
  data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_compra) REFERENCES compra(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela sabores
CREATE TABLE IF NOT EXISTS sabores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Tabela produto_sabor (associativa N:N)
CREATE TABLE IF NOT EXISTS produto_sabor (
  id_produto INT,
  id_sabor INT,
  PRIMARY KEY (id_produto, id_sabor),
  FOREIGN KEY (id_produto) REFERENCES produtos(id) ON DELETE CASCADE,
  FOREIGN KEY (id_sabor) REFERENCES sabores(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE empresa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    cnpj VARCHAR(20) NOT NULL,
    pais_origem VARCHAR(100),
    ano_fundacao DATE,
    telefone VARCHAR(20),
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE carrinho (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NULL,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS item_carrinho (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carrinho_id INT NOT NULL,
    produto_id INT NOT NULL,
    sabor VARCHAR(100) NULL,
    quantidade INT NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (carrinho_id) REFERENCES carrinho(id) ON DELETE CASCADE,
    FOREIGN KEY (produto_id) REFERENCES produtos(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
