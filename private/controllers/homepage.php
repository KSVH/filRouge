<?php
    // controllers/homepage.php
  
    require_once('../private/model/categoriesModel.php');
    require_once('../private/model/photosModel.php');
    function homepage()     
    {
        $categories = getCategories();
        // $photos = getPhotos();

        require('../private/templates/homepage.php');
    } 