<?php
// ! une maj doit etre faite car les sous categories sont dans la table categories avec un id_parent
// Connexion BDD
function dbConnect() 
{
    try {
        $db = new PDO(
            "mysql:host=localhost;dbname=filrougesimplifie;charset=utf8",
            "root",
            ""
        );
        return $db;
    }
    catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    };
}
