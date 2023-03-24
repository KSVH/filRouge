<?php
    require_once('../private/model/productsModel.php');
    function updateProductPage() 
    {
        $updateProduct = updateProduct();
        require('../private/templates/updateProduct.php');
    }