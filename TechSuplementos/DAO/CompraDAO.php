<?php
require_once './Conexao.php';

class CompraDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function salvarCompra($compra) {
        // Inserir compra (pedido)
        $queryCompra = "INSERT INTO compra (usuario_id, forma_pagamento) VALUES (?, ?)";
        $idCompra = $this->conexao->inserir($queryCompra, [
            $compra['usuario_id'],
            $compra['forma_pagamento']
        ]);

        if (!$idCompra) {
            return false;
        }

        // Inserir os itens da compra
        foreach ($compra['itens'] as $item) {
            $queryItem = "INSERT INTO compra_produto (id_compra, id_produto, quantidade, preco_unitario)
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
