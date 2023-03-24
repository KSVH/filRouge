<?php
    require_once('../private/model/productsModel.php');
    require_once('../private/model/categoriesModel.php');
    require_once('../private/model/sizesModel.php');
    require_once('../private/model/colorsModel.php');


    function addProductPage() 
    {
        $msg = '';
        $sizes = getSizes();
        $colors = getColors();
        $categories = getCategories();
        $allSubCategories = getAllSubCategories();
        if (isset($_POST['submit'])) {
            if (isset($_POST['name'], $_POST['price'], $_POST['description'], $_POST['size'], $_POST['color'], $_POST['category'], $) &&
                !empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_POST['size']) && !empty($_POST['color']) && !empty($_POST['categorie'])) {
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $description = $_POST['description'];
                    // récupération des tailles et couleurs disponibles
                    
                    $categorie = $_POST['categorie'];
                    if (!empty($_POST['photo'])) {
                        $photo = $_POST['photo'];
                    } else {

                    }
                    // boucle d'ajout de produit pour chaque taille et couleur disponible
                    foreach ($sizes as $size) {
                        foreach ($colors as $color) {
            
                            // traitement du formulaire pour chaque combinaison taille-couleur
                            if (!empty($_POST)) {
                                $subCategory = $_POST["subCategory"];
                                $name = $_POST["name"];
                                $prix = $_POST["price"];
                                $description = $_POST["description"];
                                $size = $_POST["size"];
                                $color = $_POST["color"];
                                $imageName = $_POST["pictureName"];
                
                                // appel à la fonction addProduct avec les paramètres correspondants
                                $addProduct = addProduct($subCategory, $name, $price, $description, $size, $color);
                    
                                // message de confirmation ou d'erreur selon le résultat de l'ajout
                                if ($addProduct) {
                                $msg = "Produit ajouté";
                                } else {
                                $msg =  "Erreur";
                                }
                            }
                        }
                    }
            }
        }
        require('../private/templates/addProduct.php');
    }

    // function addProductPage()
//     function addProductPage() 
// {
//     $sizes = getSizes();
//     $colors = getColors();
//     $msg = '';

//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         // Vérification des données du formulaire
//         $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
//         $prix = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_NUMBER_FLOAT);
//         $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
//         $size = filter_input(INPUT_POST, 'size', FILTER_SANITIZE_STRING);
//         $color = filter_input(INPUT_POST, 'color', FILTER_SANITIZE_STRING);
//         $categorie = filter_input(INPUT_POST, 'categorie', FILTER_SANITIZE_STRING);
//         $photo = $_POST['photo'];

//         if (empty($nom) || empty($prix) || empty($description) || empty($size) || empty($color) || empty($categorie)) {
//             $msg = 'Veuillez remplir tous les champs obligatoires.';
//         } else {
//             // Ajout du produit pour chaque combinaison taille-couleur
//             foreach ($sizes as $size) {
//                 foreach ($colors as $color) {
//                     $addProduct = addProduct($nom, $prix, $description, $size, $color, $categorie);
//                     if (!$addProduct) {
//                         $msg = 'Erreur lors de l\'ajout du produit. Veuillez réessayer plus tard.';
//                         break 2; // Sortir des deux boucles
//                     }
//                 }
//             }
//             $msg = 'Le produit a été ajouté avec succès.';
//         }
//     }

//     require('../private/templates/addProduct.php');
// }
