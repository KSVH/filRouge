<?php
    require_once('../private/model/productsModel.php');
    function deleteProductPage() 
    {
        $deleteProduct = deleteProduct();
        require('../private/templates/deleteProduct.php');
    }