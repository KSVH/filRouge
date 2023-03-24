<?php
    require_once('../private/model/categoriesModel.php');
    function addCategoryPage() 
    {
        $addCategory = addCategory();
        require('../private/templates/addCategory.php');
    }