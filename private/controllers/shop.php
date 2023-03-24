<?php
    function shopPage() 
    {
        $products = getProducts();
        require('../private/templates/shop.php');
    }