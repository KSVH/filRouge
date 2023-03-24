<?php
    require_once('../private/model/product_color_size.php');
    function addProductColorSizePage() 
    {
        $addProductColorSize = addProductColorSize();
        require('../private/templates/addProductColorSize.php');
    }