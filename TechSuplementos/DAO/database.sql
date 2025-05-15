-- Copiando estrutura do banco de dados para techsuplementos
CREATE DATABASE IF NOT EXISTS `techsuplementos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `techsuplementos`;

-- Copiando estrutura para tabela techsuplementos.compra
CREATE TABLE compra (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_usuario INT NOT NULL,
  data_compra DATETIME DEFAULT CURRENT_TIMESTAMP,
  forma_pagamento VARCHAR(50),
  total DECIMAL(10,2),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id)
);


CREATE TABLE item_compra (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_compra INT NOT NULL,
  id_estoque INT NOT NULL,
  quantidade INT NOT NULL,
  preco_unitario DECIMAL(10,2) NOT NULL,
  FOREIGN KEY (id_compra) REFERENCES compra(id),
  FOREIGN KEY (id_estoque) REFERENCES estoque(Id)
);



-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela techsuplementos.estoque
CREATE TABLE estoque (
  Id INT AUTO_INCREMENT PRIMARY KEY,
  Nome VARCHAR(255),
  Quantidade INT,
  id_produto INT
);

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela techsuplementos.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) DEFAULT NULL,
  `Avaliações` text DEFAULT NULL,
  `idUsuario` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela techsuplementos.gestão de pedido
CREATE TABLE gestao_pedido (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_compra INT NOT NULL,
  status_pagamento VARCHAR(100),
  status_envio VARCHAR(100),
  data_atualizacao DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (id_compra) REFERENCES compra(id)
);

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela techsuplementos.produto/marca
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2),
    sabor TEXT,
    catalogo ENUM('creatina', 'whey', 'pre_treino', 'top_5', 'novidades') NOT NULL,
    imagem VARCHAR(255)
    ALTER TABLE produtos ADD COLUMN status BOOLEAN DEFAULT TRUE;

);


-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela techsuplementos.usuário.
CREATE TABLE IF NOT EXISTS usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  nome VARCHAR(50) DEFAULT NULL,
  cpf VARCHAR(14) NOT NULL UNIQUE,
  telefone VARCHAR(50) DEFAULT NULL,
  senha VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE sabores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE produto_sabor (
    id_produto INT,
    id_sabor INT,
    PRIMARY KEY (id_produto, id_sabor),
    FOREIGN KEY (id_produto) REFERENCES produtos(id) ON DELETE CASCADE,
    FOREIGN KEY (id_sabor) REFERENCES sabores(id) ON DELETE CASCADE
);


-- Exportação de dados foi desmarcado.