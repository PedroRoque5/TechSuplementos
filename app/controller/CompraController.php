<?php
require_once './TechSuplementos/DAO/CompraDAO.php';

class CompraController {
    public function finalizarCompra($idUsuario, $formaPagamento, $itens) {
        $dao = new CompraDAO();

        $compra = [
            'usuario_id' => $idUsuario,
            'forma_pagamento' => $formaPagamento,
            'item_compra' => $itens
        ];

        $salvo = $dao->salvarCompra($compra);

        if ($salvo) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => 'Erro ao salvar no banco'];
        }
    }
}
