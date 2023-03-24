<?php
    require_once('../private/model/model.php');
    require_once('../private/model/photosModel.php');
    require_once('../private/model/categoriesModel.php');
    require_once('../private/model/productsModel.php');
    require_once('../private/model/product_photo.php');
    require_once('../private/model/product_color_size.php');
    require_once('../private/model/sizesModel.php');
    require_once('../private/model/colorsModel.php');

    function readProductsPage()
    {
        $products = getProducts();
        $categories = getCategories();
        $photos = getPhotos();
        // $product_photo = getProduct_photo();
        // $product_color_size = getProduct_color_size();
        $sizes = getSizes();
        $colors = getColors();

       
      
        require('../private/templates/readProducts.php');
    }