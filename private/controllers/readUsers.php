<?php
    require_once('../private/model/usersModel.php');

    function readUsersPage() 
    {
        $getUsers = getUsers();
        require('../private/templates/readUsers.php');
    }
