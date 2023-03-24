<?php
    require_once('../private/model/usersModel.php');
    $msg = '';
    if (isset($_POST['submit'])) {
        if (isset($_POST['name'], $_POST['email'], $_POST['password']) &&
            !empty(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']))) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $addUser = addUser($name, $email, $password);
            if ($addUser) {
                $msg = "Utilisateur ajouté";
            } else {
                $msg = "Erreur";
            }
        }
    }
    

    function addUserPage() 
    {
        // faire passer toutes les variables dans cette fonction
        //$addUser = addUser($profile, $gender, $name, $first_name, $email, $password, $birth_date, $phone_number, $street, $street_number, $apartment_number, $country_code, $city);
        
        require('../private/templates/addUser.php');
    }