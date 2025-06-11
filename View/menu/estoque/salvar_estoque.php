<?php

require './TechSuplementos/DAO/Conexao.php'; // troque para o nome correto do seu arquivo de conexão

// 2. Pegar dados do formulário
$id_produto = $_POST['id_produto'] ?? null;
$quantidade = $_POST['quantidade'] ?? null;

// 3. Validar dados
if (!$id_produto || !$quantidade || $quantidade <= 0) {
    die("Dados inválidos.");
}

// 4. Verificar se já existe estoque para esse produto
$stmt = $pdo->prepare("SELECT id FROM estoque WHERE id_produto = ?");
$stmt->execute([$id_produto]);
$estoque = $stmt->fetch();

if ($estoque) {
    // Já existe -> atualiza quantidade
    $stmt = $pdo->prepare("UPDATE estoque SET quantidade = quantidade + ? WHERE id_produto = ?");
    $stmt->execute([$quantidade, $id_produto]);
    echo "Estoque atualizado com sucesso.";
} else {
    // Não existe -> cria novo
    $stmt = $pdo->prepare("INSERT INTO estoque (id_produto, nome, quantidade) VALUES (?, (SELECT nome FROM produtos WHERE id = ?), ?)");
    $stmt->execute([$id_produto, $id_produto, $quantidade]);
    echo "Estoque cadastrado com sucesso.";
}
?>
