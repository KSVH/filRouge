<?php
    require_once('../private/model/productsModel.php');
    function addPhotoPage() 
    {
        $addProduct = addProduct();
        require('../private/templates/addProduct.php');
    }