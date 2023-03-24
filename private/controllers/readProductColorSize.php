<?php
    require_once('../private/model/product_color_size.php');
    function readProductColorSizePage() 
    {
        $getProductColorSize = getProductColorSize();
        require('../private/templates/readProductColorSize.php');
    }