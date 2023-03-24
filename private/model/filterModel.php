<?php
// Action pour filtrer les produits en fonction de la catégorie, de la recherche et/ou du prix
function filterProducts()
{
    // Vérifiez si des filtres ont été appliqués et récupérez-les de la requête
    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;
    $search = isset($_GET['search']) ? $_GET['search'] : null;
    $min_price = isset($_GET['min_price']) ? $_GET['min_price'] : null;
    $max_price = isset($_GET['max_price']) ? $_GET['max_price'] : null;

    // Utilisez les filtres pour récupérer les produits pertinents du modèle
    $products = getFilteredProducts($category_id, $search, $min_price, $max_price);

    // Incluez la vue appropriée pour afficher les résultats
    include 'filteredProducts.php';
}// à voir comment on se sert de ça

// Action pour traiter la soumission du formulaire de filtre
function processFilterForm()
{
    // Vérifiez si le formulaire a été soumis
    if (isset($_POST['filter'])) {
        // Récupérez les valeurs soumises du formulaire
        $category_id = $_POST['category_id'];
        $search = $_POST['search'];
        $min_price = $_POST['min_price'];
        $max_price = $_POST['max_price'];

        // Redirigez vers l'action de filtrage avec les valeurs soumises
        header("Location: index.php?action=filterProducts&category_id=$category_id&search=$search&min_price=$min_price&max_price=$max_price");
    }
}
// et ça aussi