<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="image">
        <img id="banner" src="../../public/assets/image/image.png">
    </div>
    <div id="icone">
    <i id="icon" class="fa-solid fa-truck"></i>&nbsp;
    <i id="icon" class="fa-solid fa-qrcode"></i>
    <i class="fa-solid fa-percent"></i>
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