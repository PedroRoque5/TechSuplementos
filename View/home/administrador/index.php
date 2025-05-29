<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= ASSETS ?>css/homeadmin.css" rel="stylesheet">
    <link href="<?= ASSETS ?>css/cabecalho.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="admin">
    <img id="banner" src="<?= ASSETS ?>image/banner-tech.jpg">
</body>
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

        lucide.createIcons();

</script>