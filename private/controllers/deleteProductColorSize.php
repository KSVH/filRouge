<?php
    require_once('../private/model/product_color_size.php');
    function deleteProductColorSizePage() 
    {
        $deleteProductColorSize = deleteProductColorSize();
        require('../private/templates/updateProductColorSize.php');
    }