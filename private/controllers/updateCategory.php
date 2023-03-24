<?php
    require_once('../private/model/categoriesModel.php');
    function updateCategoryPage() 
    {
        $updateCategory = updateCategory();
        require('../private/templates/updateCategory.php');
    }