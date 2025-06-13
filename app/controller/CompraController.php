<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/Conexao.php';

use TechSuplementos\DAO\Conexao;

class CompraController {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function obterHistoricoCompras($usuarioId) {
        $query = "SELECT 
                    c.id,
                    c.data_compra,
                    c.forma_pagamento,
                    c.total,
                    ic.quantidade,
                    ic.preco_unitario,
                    p.nome as produto
                FROM compra c
                INNER JOIN item_compra ic ON c.id = ic.id_compra
                INNER JOIN produtos p ON ic.id_produto = p.id
                WHERE c.id_usuario = :usuario_id
                ORDER BY c.data_compra DESC";

        $params = [':usuario_id' => $usuarioId];
        return $this->conexao->buscar($query, $params);
    }

    public function obterDetalhesCompra($idCompra) {
        $query = "SELECT 
                    c.*,
                    ic.quantidade,
                    ic.preco_unitario,
                    p.nome as produto,
                    p.imagem
                FROM compra c
                INNER JOIN item_compra ic ON c.id = ic.id_compra
                INNER JOIN produtos p ON ic.id_produto = p.id
                WHERE c.id = :id_compra";

        $params = [':id_compra' => $idCompra];
        return $this->conexao->buscar($query, $params);
    }

    public function atualizarStatusCompra($pedido, $statusPagamento, $statusEnvio) {
        $query = "UPDATE compra 
                 SET status_pagamento = :status_pagamento,
                     status_envio = :status_envio
                 WHERE id_pedido = :pedido";

        $params = [
            ':pedido' => $pedido,
            ':status_pagamento' => $statusPagamento,
            ':status_envio' => $statusEnvio
        ];

        return $this->conexao->atualizar($query, $params);
    }
}
?>
