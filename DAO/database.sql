-- Criação da tabela de compras
CREATE TABLE IF NOT EXISTS compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    pedido VARCHAR(20) NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    status_pagamento ENUM('pendente', 'aprovado', 'cancelado') NOT NULL DEFAULT 'pendente',
    status_envio ENUM('aguardando', 'enviado', 'entregue') NOT NULL DEFAULT 'aguardando',
    data_compra DATETIME NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Criação da tabela de itens da compra
CREATE TABLE IF NOT EXISTS itens_compra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    compra_id INT NOT NULL,
    produto_id INT NOT NULL,
    quantidade INT NOT NULL,
    preco_unitario DECIMAL(10,2) NOT NULL,
    sabor VARCHAR(50),
    FOREIGN KEY (compra_id) REFERENCES compras(id),
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabela de histórico de movimentações do estoque
CREATE TABLE IF NOT EXISTS historico_estoque (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produto_id INT NOT NULL,
    tipo_movimentacao ENUM('entrada', 'saida') NOT NULL,
    quantidade INT NOT NULL,
    data_movimentacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    motivo VARCHAR(255),
    usuario_id INT,
    FOREIGN KEY (produto_id) REFERENCES produtos(id),
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Adicionar coluna de estoque mínimo na tabela produtos
ALTER TABLE produtos ADD COLUMN estoque_minimo INT DEFAULT 5;

-- Adicionar coluna de estoque atual na tabela produtos
ALTER TABLE produtos ADD COLUMN estoque_atual INT DEFAULT 0; 