<?php
require_once './TechSuplementos/DAO/CompraDAO.php';

class CompraController {
    public function finalizarCompra($idUsuario, $formaPagamento, $itens) {
        $dao = new CompraDAO();

        if (empty($itens)) {
            return ['success' => false, 'message' => 'Carrinho vazio'];
        }

        $compra = [
            'usuario_id' => $idUsuario,
            'forma_pagamento' => $formaPagamento,
            'itens' => $itens
        ];

        $salvo = $dao->salvarCompra($compra);

        if ($salvo) {
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => 'Erro ao salvar no banco'];
        }
    }
}
