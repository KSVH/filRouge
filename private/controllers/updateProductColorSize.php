<?php
    require_once('../private/model/product_color_size.php');
    function updateProductColorSizePage() 
    {
        $updateProductColorSize = updateProductColorSize();
        require('../private/templates/updateProductColorSize.php');
    }