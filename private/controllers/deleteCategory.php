<?php
    require_once('../private/model/categoriesModel.php');
    function deleteCategoryPage() 
    {
        $deleteCategory = deleteCategory();
        require('../private/templates/deleteCategory.php');
    }