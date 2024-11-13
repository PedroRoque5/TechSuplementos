
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
                <a href="<?= URL . 'index.php?pg=suplementos_musculo' ?>" class="btn">Veja os Suplementos</a>
            </div>

            <div class="meta-card">
                <i  id="metas" class="fa-solid fa-weight-scale"></i>
                <h2>Emagrecimento</h2>
                <p>Se sua meta é perder peso, temos uma seleção de suplementos que auxiliam no processo de emagrecimento e queimar gordura.</p>
                <a href="<?= URL . 'index.php?pg=suplementos_emagrecimento' ?>" class="btn">Veja os Suplementos</a>
            </div>

            <div   class="meta-card">
                <i id="metas"class="fa-solid fa-heart"></i>
                <h2>Melhorar a Saúde Cardíaca</h2>
                <p>Com suplementos focados na saúde do coração, você pode melhorar sua qualidade de vida e a saúde cardiovascular.</p>
                <a href="<?= URL . 'index.php?pg=suplementos_saude_cardiaca' ?>" class="btn">Veja os Suplementos</a>
            </div>

            <div   class="meta-card">
                <i id="metas" class="fa-solid fa-bolt"></i>
                <h2>Aumentar a Energia</h2>
                <p>Se você precisa de mais disposição para o dia a dia ou para os treinos, nossos suplementos energéticos são a escolha certa.</p>
                <a href="<?= URL . 'index.php?pg=suplementos_energia' ?>" class="btn">Veja os Suplementos</a>
            </div>

            <div  class="meta-card">
                <i  id="metas" class="fa-solid fa-sun"></i>
                <h2>Melhorar a Imunidade</h2>
                <p>Suplementos que fortalecem seu sistema imunológico para que você se sinta mais saudável e protegido.</p>
                <a href="<?= URL . 'index.php?pg=suplementos_imunidade' ?>" class="btn">Veja os Suplementos</a>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Tech Suplementos - Todos os direitos reservados.</p>
    </footer>
</body>
</html>
