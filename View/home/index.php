<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS?>css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="image">
        <img id="banner" src="<?= ASSETS?>image/image.png">
    </div>
    <div id="icone">
    <i id="icon" class="fa-solid fa-truck"></i>&nbsp; <span>Frete grátis à partir de R$200</span>
    <i id="icon" class="fa-solid fa-qrcode"></i>&nbsp;<span>Compre em nossa loja com 5%OFF no PIX</span>
    <i id="icon" class="fa-solid fa-percent"></i>&nbsp;<span>Use um cupom de desconto</span>
    <i id="icon" class="fa-regular fa-credit-card"></i>&nbsp;<span>Compras em até 10X sem juros</span>
    </div>
    <?php

    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const dropbtn = document.querySelector('.dropbtn');
    const dropdownMenu = document.querySelector('.dropdown-menu');
    
    dropbtn.addEventListener('click', function(event) {
        event.stopPropagation(); 
        
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });
    document.addEventListener('click', function() {
        if (dropdownMenu.style.display === 'block') {
            dropdownMenu.style.display = 'none';
        }
    });
});

    </script>