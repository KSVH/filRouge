<?php
    require_once('../private/model/cartsModel.php');
    require_once('../private/model/productsModel.php');
    require_once('../private/model/usersModel.php');

    function cartPage() 
    {
        // demander comment faire
        $getProducts = getProducts();
        $getUsers = getUsers();
        require('../private/templates/cart.php');
    }