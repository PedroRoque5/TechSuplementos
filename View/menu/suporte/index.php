    <link href="<?= ASSETS ?>css/suporte.css" rel="stylesheet">
    <title>Suporte - Tech Suplementos</title>
<body>
    <header>
        <h1>Suporte - Tech Suplementos</h1>
        <p>Estamos aqui para te ajudar! Se você tiver dúvidas ou problemas, entre em contato conosco.</p>
    </header>

    <div id="suporte">
        <section id="informacoes">
            <h2>Informações de Suporte</h2>
            <p><i class="fa-solid fa-phone"></i> Telefone: (14) 12345-6789</p>
            <p><i class="fa-solid fa-envelope"></i> Email: suporte@techsuplementos.com.br</p>
            <p><i class="fa-solid fa-location-dot"></i> Endereço: Rua da Suplementos, 123, Ourinhos - SP</p>
        </section>

        <section id="formu">
            <h2>Formulário de Contato</h2>
            <form action="<?= URL . 'index.php?pg=enviar_suporte' ?>" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>

                <button type="submit" class="btn-success">Enviar Mensagem</button>
            </form>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Tech Suplementos - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
