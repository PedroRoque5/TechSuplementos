<?php
require_once './TechSuplementos/DAO/Conexao.php';

class CompraDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

  public function salvarCompra($compra) {
    // Inserir a compra
    $queryCompra = "INSERT INTO compra (id_usuario, forma_pagamento) VALUES (?, ?)";
    $idCompra = $this->conexao->inserir($queryCompra, [
        $compra['usuario_id'],
        $compra['forma_pagamento']
    ]);

    if (!$idCompra) {
        return false;
    }

    // Inserir os itens da compra (ligados ao estoque, não ao produto direto)
    foreach ($compra['item_compra'] as $item) {
        // Buscar o estoque do produto para registrar corretamente
        $estoque = $this->conexao->buscar("SELECT id FROM estoque WHERE id_produto = ? LIMIT 1", [
            $item['id_produto']
        ]);

        if (!$estoque || empty($estoque[0]['id'])) {
            continue; // ou retorne false se quiser abortar o processo
        }

        $idEstoque = $estoque[0]['id'];

        $queryItem = "INSERT INTO item_compra (id_compra, id_estoque, quantidade, preco_unitario)
                      VALUES (?, ?, ?, ?)";
        $this->conexao->inserir($queryItem, [
            $idCompra,
            $idEstoque,
            $item['quantidade'],
            $item['preco_unitario']
        ]);
    }

    return $idCompra;
}
}