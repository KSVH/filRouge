<?php
    require_once('../private/model/usersModel.php');
    require_once('../private/model/productsModel.php');
    require_once('../private/model/cartsModel.php');
    require_once('../private/model/ordersModel.php');

    function myAccountPage() 
    {
        $getUserById = getUserById($id);
        require('../private/templates/myAccount.php');
    }