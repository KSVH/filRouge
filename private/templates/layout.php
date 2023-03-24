<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-xxxxxx" crossorigin="anonymous" />
        <link href="../private/assets/style.css" rel="stylesheet" />    
    </head>
        <body>
            <?php
            include('includes/navbarAdmin.php');
            include('includes/navbar.php');
            ?>
        <?= $content ?> 
        <?php
            include('includes/footer.php');
            ?>
    </body>
    <script>
        const menu = document.querySelector('.liste-nav');
        const btnMenu = document.querySelector('.btn-toggle-container');

        btnMenu.addEventListener('click', function() {
            menu.classList.toggle('active-menu');
        });
    </script>
    </html>
