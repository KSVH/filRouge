<?php
// requetes SQL pour product_photo select procedural
function getProductPhotos() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM product_photo');
    $query->execute();
    return $query->fetchAll();
}

function getProductPhotoById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM product_photo WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}
// requetes SQL pour product_photo insert into procedural
function addProductPhoto($id, $id_photo, $id_product) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO product_photo (id_photo, id_product) 
    VALUES (?, ?)');
    $query->bindValue(1, $id_photo, PDO::PARAM_INT);
    $query->bindValue(2, $id_product, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour product_photo update procedural
function updateProductPhoto($id, $id_photo, $id_product) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE product_photo SET id_photo = :id_photo, id_product = :id_product WHERE id = :id');
    $query->bindValue(':id_photo', $id_photo, PDO::PARAM_STR);
    $query->bindValue(':id_product', $id_product, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}


// requetes SQL pour product_photo delete procedural
function deleteProductPhoto($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM product_photo WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}