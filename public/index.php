<?php
    // Pages admin
    require_once('../private/controllers/crud.php');
    require_once('../private/controllers/readProducts.php');
    // require_once('../private/controllers/readProduct.php');
    require_once('../private/controllers/addProduct.php');
    require_once('../private/controllers/updateProduct.php');
    require_once('../private/controllers/deleteProduct.php');
    require_once('../private/controllers/readPhotos.php');
    // require_once('../private/controllers/readPhoto.php');
    require_once('../private/controllers/addPhoto.php');
    require_once('../private/controllers/updatePhoto.php');
    require_once('../private/controllers/deletePhoto.php');
    require_once('../private/controllers/readCategories.php');
    // require_once('../private/controllers/readCategory.php');
    require_once('../private/controllers/addCategory.php');
    require_once('../private/controllers/updateCategory.php');
    require_once('../private/controllers/deleteCategory.php');
    require_once('../private/controllers/readUsers.php');
    // require_once('../private/controllers/readUser.php');
    require_once('../private/controllers/addUser.php');
    require_once('../private/controllers/updateUser.php');
    require_once('../private/controllers/deleteUser.php');
    // require_once('../private/controllers/readOrders.php');
    // require_once('../private/controllers/readOrder.php');
    // require_once('../private/controllers/addOrder.php');
    // require_once('../private/controllers/updateOrder.php');
    // require_once('../private/controllers/deleteOrder.php');
    require_once('../private/controllers/readProductColorSize.php');
    require_once('../private/controllers/addProductColorSize.php');
    require_once('../private/controllers/updateProductColorSize.php');
    require_once('../private/controllers/deleteProductColorSize.php');
    // Pages client
    require_once('../private/controllers/homepage.php');
    require_once('../private/controllers/contact.php');
    require_once('../private/controllers/shop.php');
    require_once('../private/controllers/cart.php');
    require_once('../private/controllers/myAccount.php');
    require_once('../private/controllers/login.php');

    if (isset($_GET['action']) && $_GET['action'] !== '') {
        
        // Pages admin 
        if ($_GET['action'] === 'crud') {
            crudPage();
        } elseif ($_GET['action'] === 'readProducts') {
            readProductsPage();
        } elseif ($_GET['action'] === 'readProduct') {
            readProductPage();
        } elseif ($_GET['action'] === 'addProduct') {
            addProductPage();
        } elseif ($_GET['action'] === 'updateProduct') {
            updateProductPage();
        } elseif ($_GET['action'] === 'deleteProduct') {
            deleteProductPage();
        } elseif ($_GET['action'] === 'readPhotos') {
            readPhotosPage();
        } elseif ($_GET['action'] === 'readPhoto') {
            readPhotoPage();
        } elseif ($_GET['action'] === 'addPhoto') {
            addPhotoPage();
        } elseif ($_GET['action'] === 'updatePhoto') {
            updatePhotoPage();
        } elseif ($_GET['action'] === 'deletePhoto') {
            deletePhotoPage();
        } elseif ($_GET['action'] === 'readCategories') {
            readCategoriesPage();
        } elseif ($_GET['action'] === 'readCategory') {
            readCategoryPage();
        } elseif ($_GET['action'] === 'addCategory') {
            addCategoryPage();
        } elseif ($_GET['action'] === 'updateCategory') {
            updateCategoryPage();
        } elseif ($_GET['action'] === 'deleteCategory') {
            deleteCategoryPage();
        } elseif ($_GET['action'] === 'readUsers') {
            readUsersPage();
        } elseif ($_GET['action'] === 'readUser') {
            readUserPage();
        } elseif ($_GET['action'] === 'addUser') {
            addUserPage();
        } elseif ($_GET['action'] === 'updateUser') {
            updateUserPage();
        } elseif ($_GET['action'] === 'deleteUser') {
            deleteUserPage();
        } elseif ($_GET['action'] === 'readOrders') {
            readOrdersPage();
        } elseif ($_GET['action'] === 'readOrder') {
            readOrderPage();
        } elseif ($_GET['action'] === 'addOrder') {
            addOrderPage();
        } elseif ($_GET['action'] === 'updateOrder') {
            updateOrderPage();
        } elseif ($_GET['action'] === 'deleteOrder') {
            deleteOrderPage();
        } elseif ($_GET['action'] === 'readProductColorSize') {
            readProductColorSizePage();
        } elseif ($_GET['action'] === 'addProductColorSize') {
            addProductColorSizePage();
        } elseif ($_GET['action'] === 'updateProductColorSize') {
            updateProductColorSizePage();
        } elseif ($_GET['action'] === 'deleteProductColorSize') {
            deleteProductColorSizePage();
        }
        // Pages client
        elseif ($_GET['action'] === 'homePage') {
            homepage();
        } elseif ($_GET['action'] === 'contact') {
            contactPage();
        } elseif ($_GET['action'] === 'shop') {
            shopPage();
        } elseif ($_GET['action'] === 'panier') {
            cartPage();
        } elseif ($_GET['action'] === 'monCompte') {
            myAccountPage();
        } elseif ($_GET['action'] === 'deconnexion') {
            logout();
        } elseif ($_GET['action'] === 'connexion') {
            loginPage();
        } elseif ($_GET['action'] === 'inscription') {
            addUserPage();
        }
        
    }
    elseif (!isset($_GET['action'])) {
        homepage();
    }
    else {
        echo "Erreur 404 : la page que vous recherchez n'existe pas.";
    }

