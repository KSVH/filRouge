<?php
// requetes SQL pour Orders select procedural
function getOrders() {
    $db = dbConnect();
    $getOrders = $db->query('SELECT * FROM Orders');
    $getOrders->execute();
    return $getOrders;
}

function getOrdersById($id) {
    $db = dbConnect();
    $getOrdersById = $db->prepare('SELECT * FROM Orders WHERE id = ?');
    $getOrdersById->bindValue(':id', $id, PDO::PARAM_INT);  
    $getOrdersById->execute();
    return $getOrdersById->fetch();
}
// requetes SQL pour Orders insert into procedural
function addOrder($name, $email, $price, $ident_cart, $message, $total_price, $created_at) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Orders (name, first_name, email, phone_number, street, street_number, apartment_number, country_code, city, currency, price, ident_cart, message, total_price, created_at) 
    VALUES (?, ?, ?, ?, ?, ?, NOW())');
    $query->bindValue(1, $name, PDO::PARAM_STR);
    $query->bindValue(2, $email, PDO::PARAM_STR);
    $query->bindValue(3, $price, PDO::PARAM_STR);
    $query->bindValue(4, $ident_cart, PDO::PARAM_INT);
    $query->bindValue(5, $message, PDO::PARAM_STR);
    $query->bindValue(6, $total_price, PDO::PARAM_STR);
    $query->bindValue(7, $created_at, PDO::PARAM_STR);
    $query->execute();
}
// requetes SQL pour Orders update procedural
function updateOrder($id, $name, $first_name, $email, $phone_number, $street, $street_number, $apartment_number, $country_code, $city, $currency, $price, $ident_cart, $message, $total_price, $modified_at) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Orders SET name = ?, email = ?, price = ?, ident_cart = ?, message = ?, total_price = ?, modified_at = NOW() WHERE id = ?');
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':price', $price, PDO::PARAM_INT);
    $query->bindValue(':ident_cart', $ident_cart, PDO::PARAM_INT);
    $query->bindValue(':message', $message, PDO::PARAM_STR);
    $query->bindValue(':total_price', $total_price, PDO::PARAM_STR);
    $query->bindValue(':modified_at', $modified_at, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $updateOrder = $query->execute();
}
// requetes SQL pour Orders delete procedural
function deleteOrder($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Orders WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $deleteOrder = $query->execute();
}

// ACHTUNG !!! IL FAUDRA MODIFIER LA BDD POUR AJOUTER DES COLONNES MODIFIED_AT LA OU Y A DES CREATED_AT !!! VORSICHT