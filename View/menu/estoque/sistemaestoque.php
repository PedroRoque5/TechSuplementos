<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/config_serve.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/TechSuplementos/DAO/EstoqueDAO.php';

use TechSuplementos\DAO\EstoqueDAO;
use TechSuplementos\DAO\Conexao;

$estoqueDAO = new EstoqueDAO();
$relatorioEstoque = $estoqueDAO->obterRelatorioEstoque();
$historico = $estoqueDAO->obterHistoricoMovimentacoes();
$produtosEstoqueBaixo = $estoqueDAO->obterProdutosEstoqueBaixo();

// Consulta os produtos
$conexao = new Conexao();
$produtos = $conexao->buscar("SELECT * FROM produtos ORDER BY nome");
?>

<link href="<?= ASSETS ?>css/estoque.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<header>
    <h1>Controle de Estoque</h1>
</header>

<main>
    <!-- Seção de Alertas de Estoque Baixo -->
    <?php if (!empty($produtosEstoqueBaixo)): ?>
    <section class="alerts">
        <h2><i class="fas fa-exclamation-triangle"></i> Alertas de Estoque</h2>
        <div class="alert-list">
            <?php foreach ($produtosEstoqueBaixo as $produto): ?>
            <div class="alert-item">
                <span class="product-name"><?= htmlspecialchars($produto['nome']) ?></span>
                <span class="stock-info">
                    Estoque atual: <?= $produto['estoque_atual'] ?> | 
                    Mínimo: <?= $produto['estoque_minimo'] ?>
                </span>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <!-- Seção de Movimentação de Estoque -->
    <section class="stock-movement">
        <h2>Movimentação de Estoque</h2>
        
        <!-- Formulário de Movimentação de Estoque -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Movimentação de Estoque</h5>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </div>
                <?php endif; ?>

                <form action="<?= URL .'index.php?pg=salvar_estoque'?>" method="POST" id="formMovimentacao">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="id_produto">Produto</label>
                                <select class="form-control" id="id_produto" name="id_produto" required>
                                    <option value="">Selecione um produto</option>
                                    <?php foreach ($produtos as $produto): ?>
                                        <option value="<?= $produto['id'] ?>" data-estoque="<?= $produto['estoque_atual'] ?>">
                                            <?= htmlspecialchars($produto['nome']) ?> (Estoque: <?= $produto['estoque_atual'] ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="quantidade">Quantidade</label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade" min="1" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="tipo_movimentacao">Tipo</label>
                                <select class="form-control" id="tipo_movimentacao" name="tipo_movimentacao" required>
                                    <option value="entrada">Entrada</option>
                                    <option value="saida">Saída</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="motivo">Motivo</label>
                                <input type="text" class="form-control" id="motivo" name="motivo" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar Movimentação</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Seção de Relatório de Estoque -->
    <section class="stock-report">
        <h2>Relatório de Estoque</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Estoque Atual</th>
                        <th>Estoque Mínimo</th>
                        <th>Total Entradas</th>
                        <th>Total Saídas</th>
                        <th>Qtd. Total Entradas</th>
                        <th>Qtd. Total Saídas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($relatorioEstoque)): ?>
                        <?php foreach ($relatorioEstoque as $produto): ?>
                            <tr>
                                <td><?= htmlspecialchars($produto['nome']) ?></td>
                                <td><?= $produto['estoque_atual'] ?></td>
                                <td><?= $produto['estoque_minimo'] ?></td>
                                <td><?= $produto['total_entradas'] ?></td>
                                <td><?= $produto['total_saidas'] ?></td>
                                <td><?= $produto['quantidade_total_entradas'] ?></td>
                                <td><?= $produto['quantidade_total_saidas'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center">Nenhum produto encontrado</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<script>
function filtrarHistorico() {
    const dataInicio = document.getElementById('dataInicio').value;
    const dataFim = document.getElementById('dataFim').value;
    
    // Aqui você pode implementar a lógica para filtrar o histórico
    // usando AJAX para buscar os dados filtrados
    console.log('Filtrar histórico:', { dataInicio, dataFim });
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formMovimentacao');
    const tipoSelect = document.getElementById('tipo_movimentacao');
    const quantidadeInput = document.getElementById('quantidade');
    const produtoSelect = document.getElementById('id_produto');

    form.addEventListener('submit', function(e) {
        const produto = produtoSelect.options[produtoSelect.selectedIndex];
        const estoqueAtual = parseInt(produto.dataset.estoque);
        const quantidade = parseInt(quantidadeInput.value);
        const tipo = tipoSelect.value;

        console.log('Validando movimentação:', {
            produto: produto.text,
            estoqueAtual,
            quantidade,
            tipo
        });

        if (tipo === 'saida' && quantidade > estoqueAtual) {
            e.preventDefault();
            alert('Quantidade indisponível em estoque!');
            return false;
        }

        if (quantidade <= 0) {
            e.preventDefault();
            alert('A quantidade deve ser maior que zero!');
            return false;
        }

        console.log('Enviando formulário...');
        return true; // Permite o envio do formulário
    });
});

// Atualizar informações do produto selecionado
document.getElementById('id_produto').addEventListener('change', function() {
    const option = this.options[this.selectedIndex];
    const estoque = option.dataset.estoque;
    
    console.log('Produto selecionado:', {
        nome: option.text,
        estoque: estoque
    });
});
</script>
