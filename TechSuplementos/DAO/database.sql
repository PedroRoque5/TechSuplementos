-- Copiando estrutura do banco de dados para techsuplementos
CREATE DATABASE IF NOT EXISTS `techsuplementos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `techsuplementos`;

-- Copiando estrutura para tabela techsuplementos.compra
CREATE TABLE IF NOT EXISTS `compra` (
  `Forma de pagamento` varchar(50) DEFAULT NULL,
  `Id` int(10) DEFAULT NULL,
  `Quantidade de produtos` int(255) DEFAULT NULL,
  `idEstoque` int(10) DEFAULT NULL,
  `idUsuario` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela techsuplementos.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `Id` int(10) DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Quantidade` int(255) DEFAULT NULL,
  `idProduto/marca` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela techsuplementos.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) DEFAULT NULL,
  `Avaliações` text DEFAULT NULL,
  `idUsuario` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela techsuplementos.gestão de pedido
CREATE TABLE IF NOT EXISTS `gestão de pedido` (
  `id` int(10) DEFAULT NULL,
  `Histórico de Compra` varchar(255) DEFAULT NULL,
  `Histórico do pagamento` varchar(255) DEFAULT NULL,
  `idCompra` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
);


-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela techsuplementos.promoção/desconto
CREATE TABLE IF NOT EXISTS `promoção/desconto` (
  `id` int(10) DEFAULT NULL,
  `Valor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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