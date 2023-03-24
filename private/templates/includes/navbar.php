<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">filRougeNav</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../public/index.php?action=homePage">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?action=shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?action=panier">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?action=monCompte">Mon Compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php?action=contact">Nous contacter</a>
                </li>
                <?php 
                    if (isset($_SESSION['email'])) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="../public/index.php?action=deconnexion">Deconnexion</a>
                        </li>
                <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="../public/index.php?action=connexion">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public/index.php?action=inscription">Inscription</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
</nav>

