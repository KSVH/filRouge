<?php
    require_once('../private/model/usersModel.php');
    function deleteUserPage() 
    {
        $deleteUser = deleteUser();
        require('../private/templates/deleteUser.php');
    }