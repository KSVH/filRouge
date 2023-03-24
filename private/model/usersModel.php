<?php
// requetes SQL pour users select procedural
function getUsers() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM users');
    $query->execute();
    return $query->fetchAll();
}
function getUser($email) {
    $db = dbConnect();
    $getUser = $db->prepare('SELECT * FROM users WHERE email = ?');
    $getUser->execute(array($email));
    return $getUser->fetch(PDO::FETCH_ASSOC);
}


function getUserById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM users WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}
// requetes SQL pour users insert into procedural
function addUser($name, $email, $password) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO users (name, email, password) 
    VALUES (?, ?, ?)');
    $query->bindValue(1, $name, PDO::PARAM_STR);
    $query->bindValue(2, $email, PDO::PARAM_STR);
    $query->bindValue(3, $password, PDO::PARAM_STR);
    $query->execute();
}
// requetes SQL pour users update procedural
function updateUser($id, $name, $email, $password) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id');
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}


// requetes SQL pour users delete procedural
function deleteUser($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM users WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}
// POUR LES NOTIONS DE GENRE, IL VA FALLOIR MODIFIER LA TABLE PRODUCT POUR INDIQUER SI C'EST PLUTOT UN PRODUIT HOMME OU FEMME, NIQUE MES MORTS !!