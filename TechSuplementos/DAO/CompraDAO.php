<?php
require_once './TechSuplementos/DAO/Conexao.php';

class CompraDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function salvarCompra($compra) {
        // Inserir compra (pedido)
        $queryCompra = "INSERT INTO compra (id_usuario, forma_pagamento) VALUES (?, ?)";
        $idCompra = $this->conexao->inserir($queryCompra, [
            $compra['id_usuario'],
            $compra['forma_pagamento']
        ]);

        if (!$idCompra) {
            return false;
        }

        // Inserir os itens da compra
        foreach ($compra['item_compra'] as $item) {
            $queryItem = "INSERT INTO item_compra (id_compra, id_produto, quantidade, preco_unitario)
                          VALUES (?, ?, ?, ?)";
            $this->conexao->inserir($queryItem, [
                $idCompra,
                $item['id_produto'],
                $item['quantidade'],
                $item['preco_unitario']
            ]);
        }

        return $idCompra;
    }
}
