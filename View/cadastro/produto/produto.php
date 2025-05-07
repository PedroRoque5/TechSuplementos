<link href="<?= ASSETS ?>css/produto.css" rel="stylesheet">
<link href="<?= ASSETS ?>css/rodape.css" rel="stylesheet">
<body class="body">
<div class="container">
<div id="cad"><h1>Cadastre o seu produto:</h1></div>
    <!-- Formulário de Cadastro -->
    <form class="form" action="<?= URL . 'index.php?pg=salva_produto' ?>" method="post" enctype="multipart/form-data">

        <div>
            <input type="text" id="produto_nome" name="produto_nome" placeholder="Nome do Produto" required>
        </div>

        <!-- Descrição -->
        <div>
            <textarea id="descricao" name="descricao" placeholder="Descrição do Produto" rows="5" style="width: 400px; resize: vertical;"></textarea>
        </div>

        <!-- Sabores dinâmicos -->
        <div id="sabores-container">
            <div class="sabor-input">
                <input type="text" name="sabores[]" placeholder="Informe um sabor">
                <button type="button" onclick="adicionarSabor()">+</button>
            </div>
        </div>

        <!-- Preço -->
        <div>
            <input type="text" id="preco" name="preco" placeholder="Preço (R$)">
            <small style="font-size: 12px; color: #f5f5f5;"></small>
        </div>

        <!-- Catálogo -->
        <div>
            <select id="catalogo" name="catalogo" required>
                <option value="" disabled selected>Tipo de produto</option>
                <option value="creatina">Creatina</option>
                <option value="whey">Whey</option>
                <option value="pre_treino">Pré-Treino</option>
            </select>
        </div>

        <!-- Imagem -->
        <div id="foto">
            <input type="file" id="produto_img" name="produto_img" accept="image/*">
        </div>

        <!-- Botões -->
        <button type="submit" class="btn btn-success">Cadastrar</button>
        <a href="<?= URL . 'index.php?pg=home' ?>" class="btn btn-input">Cancelar</a>
    </form>
    <form action="<?= URL . 'index.php?pg=atualiza_produto' ?>" method="post">
        <button type="submit" class="btn btn-warning">Atualizar Produto</button>
        </form>
</div>
</div>

<!-- Script para adicionar/remover campos de sabor -->
<script>
function adicionarSabor() {
    const container = document.getElementById('sabores-container');
    const div = document.createElement('div');
    div.classList.add('sabor-input');
    div.innerHTML = `
        <input type="text" name="sabores[]" placeholder="Informe um sabor">
        <button type="button" onclick="removerSabor(this)">-</button>
    `;
    container.appendChild(div);
}

function removerSabor(botao) {
    botao.parentElement.remove();
}
</script>
</body>