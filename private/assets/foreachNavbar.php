
<!-- affichage de la navbar via foreach() -->

<nav>
  <ul class="liste-nav">
    <li><a href="#">Accueil</a></li>
    <?php
    // Connexion à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees;charset=utf8', 'nom_utilisateur', 'mot_de_passe');

    // Récupération des catégories parentes
    $req = $bdd->query('SELECT * FROM categorie WHERE id_parent IS NULL');

    while ($cat = $req->fetch()) {
      echo '<li><a href="#">'.$cat['nom'].'</a>';

      // Récupération des sous-catégories de cette catégorie parente
      $subReq = $bdd->prepare('SELECT * FROM categorie WHERE id_parent = ?');
      $subReq->execute(array($cat['id']));
      $subCats = $subReq->fetchAll();

      // Affichage des sous-catégories si elles existent
      if (count($subCats) > 0) {
        echo '<ul>';

        foreach ($subCats as $subCat) {
          echo '<li><a href="#">'.$subCat['nom'].'</a></li>';
        }

        echo '</ul>';
      }

      echo '</li>';
    }
    ?>
  </ul>
  <div class="btn-toggle-container" role="button">
    <img src="menu.svg" alt="hamburger">
  </div>
</nav>