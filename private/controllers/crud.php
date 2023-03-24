<?php
        require_once('../private/model/model.php');
        require_once('../private/model/categoriesModel.php');
        require_once('../private/model/photosModel.php');

        function crudPage()
        {
            //$categories = getCategories();
            //$photos = getPhotos();
            require('../private/templates/crud.php');
        }