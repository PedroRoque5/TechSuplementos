<link href="<?= ASSETS ?>css/dados.css" rel="stylesheet">
<div class="form-container">
    <h2>Alterar Dados Pessoais</h2>
    <form id="personalDataForm" onsubmit="return salvarDados(event)">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="João Silva" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="joao.silva@email.com" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="tel" id="telefone" name="telefone" value="(11) 91234-5678" required>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" value="Rua Exemplo, 123, São Paulo" required>
        </div>

        <button type="submit" class="btn">Salvar Alterações</button>
    </form>

    <div id="message" class="message"></div>
</div>
<script>
    // Função para simular o salvamento de dados
    function salvarDados(event) {
        event.preventDefault(); // Impede o envio do formulário

        // Recupera os dados do formulário
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const telefone = document.getElementById('telefone').value;
        const endereco = document.getElementById('endereco').value;

        // Simula o salvamento e exibe uma mensagem de sucesso
        const messageDiv = document.getElementById('message');
        messageDiv.innerHTML = `<p>Dados atualizados com sucesso!</p>
                                    <ul>
                                        <li><strong>Nome:</strong> ${nome}</li>
                                        <li><strong>Email:</strong> ${email}</li>
                                        <li><strong>Telefone:</strong> ${telefone}</li>
                                        <li><strong>Endereço:</strong> ${endereco}</li>
                                    </ul>`;
        messageDiv.style.color = 'green';
    }
</script>