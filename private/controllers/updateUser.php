<?php
    require_once('../private/model/usersModel.php');
    function updateUserPage() 
    {
        $updateUser = updateUser();
        require('../private/templates/updateProduct.php');
    }