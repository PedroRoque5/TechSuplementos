
    <link href="<?= ASSETS ?>css/metas.css" rel="stylesheet">
    <title>Metas - Tech Suplementos</title>
<body>
    <div id="metas">
        <h1>Escolha Sua Meta</h1>
        <p>Na Tech Suplementos, temos produtos específicos para ajudá-lo a alcançar seus objetivos de saúde e fitness. Selecione uma das metas abaixo para ver nossos suplementos recomendados!</p>

        <div class="opcoes">
            <div class="meta-card">
                <i id="metas" class="fa-solid fa-dumbbell"><h2>Aumentar Massa Muscular</h2></i>
                
                <p>Se você deseja ganhar músculos de forma saudável e eficiente, temos os suplementos ideais para ajudar nesse processo.</p>
                <a href="<?= URL . 'index.php?pg=creatina' ?>" class="btn">Veja os Suplementos</a>
            </div>

            <div   class="meta-card">
                <i id="metas"class="fa-solid fa-heart"></i>
                <h2>Recuperar e construir o tecido Muscular</h2>
                <p>Com suplementos focados na construção e restauração do tecido muscular, você pode melhorar sua qualidade de vida e a saúde muscular.</p>
                <a href="<?= URL . 'index.php?pg=proteina' ?>" class="btn">Veja os Suplementos</a>
            </div>

            <div   class="meta-card">
                <i id="metas" class="fa-solid fa-bolt"></i>
                <h2>Aumentar a Energia</h2>
                <p>Se você precisa de mais disposição para o dia a dia ou para os treinos, nossos suplementos energéticos são a escolha certa.</p>
                <a href="<?= URL . 'index.php?pg=pre' ?>" class="btn">Veja os Suplementos</a>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Tech Suplementos - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
