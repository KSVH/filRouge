<?php
    require_once('../private/model/model.php');
    require_once('../private/model/usersModel.php');

    //systeme de connexion qui stocke en session l'email php
    function loginPage()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = getUser($email);
            if ($user && $user['password'] == $password) {
                $_SESSION['email'] = $email;
                header('Location: index.php');
            } else {
                $error = 'Identifiants incorrects';
            }
        }
        require('../private/templates/connexion.php');
    }