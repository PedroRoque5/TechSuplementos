<?php
require_once './TechSuplementos/DAO/Conexao.php';

class CompraDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function buscarHistoricoCompras($usuarioId)
    {
        $query = "SELECT 
    c.id AS pedido,
    c.data_compra,
    c.forma_pagamento,
    c.total,
    p.nome AS produto,
    ic.quantidade,
    ic.preco_unitario,
    gp.status_pagamento,
    gp.status_envio
FROM compra c
JOIN item_compra ic ON ic.id_compra = c.id
JOIN produtos p ON p.id = ic.id_produto  -- Aqui está a junção correta
LEFT JOIN gestao_pedido gp ON gp.id_compra = c.id
WHERE c.id_usuario = ?
ORDER BY c.data_compra DESC";

        return $this->conexao->buscar($query, [$usuarioId]);
    }
}
