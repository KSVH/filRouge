<?php
// requetes SQL pour Carts select procedural
function getCarts() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Carts');
    return $query->fetchAll();
}

function getCartById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Carts WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}
// requetes SQL pour Carts insert into procedural
function addCart($ident_order, $price, $ident_product, $quantity, $total_price, $ident_user) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Carts (ident_order, price, ident_product, quantity, total_price, ident_user) VALUES (?, ?, ?, ?, ?, ?)');
    $query->bindValue(1, $ident_order, PDO::PARAM_STR);
    $query->bindValue(2, $price, PDO::PARAM_INT);
    $query->bindValue(3, $ident_product, PDO::PARAM_INT);
    $query->bindValue(4, $quantity, PDO::PARAM_INT);
    $query->bindValue(5, $total_price, PDO::PARAM_INT);
    $query->bindValue(6, $ident_user, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour Carts update procedural
function updateCart($id, $ident_order, $price, $ident_product, $quantity, $total_price, $ident_user) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Carts SET name = ? WHERE id = ?');
    $query->bindValue(':ident_order', $ident_order, PDO::PARAM_STR);
    $query->bindValue(':price', $price, PDO::PARAM_INT);
    $query->bindValue(':ident_product', $ident_product, PDO::PARAM_INT);
    $query->bindValue(':quantity', $quantity, PDO::PARAM_INT);
    $query->bindValue(':total_price', $total_price, PDO::PARAM_INT);
    $query->bindValue(':ident_user', $ident_user, PDO::PARAM_INT);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour Carts delete procedural
function deleteCart($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Carts WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}
  