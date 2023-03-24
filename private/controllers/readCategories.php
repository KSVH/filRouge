<?php
    // controllers/categories.php
    require_once('../private/model/model.php');
    require_once('../private/model/categoriesModel.php');
    require_once('../private/model/photosModel.php');
    function readCategoriesPage()     
    {
        $categories = getCategories();
        $photos = getPhotos();
        require('../templates/showCategories.php');
    } 