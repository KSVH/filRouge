<?php
// requetes SQL pour Colors select procedural
function getColors() {
    $db = dbConnect();
    $getColors = $db->query('SELECT * FROM Colors');
    return $getColors->fetchAll();
}

function getColorById($id) {
    $db = dbConnect();
    $getColorById = $db->prepare('SELECT * FROM Colors WHERE id = ?');
    $getColorById->bindValue(':id', $id, PDO::PARAM_INT);
    $getColorById->execute();
    return $getColorById->fetch();
}
// requetes SQL pour Colors insert into procedural
function addColor($color, $description, $is_enabled, $inc_number) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Colors (color, description, is_enabled, inc_number) VALUES (?, ?, ?, ?)');
    $query->bindValue(1, $color, PDO::PARAM_STR);
    $query->bindValue(2, $description, PDO::PARAM_STR);
    $query->bindValue(3, $is_enabled, PDO::PARAM_INT);
    $query->bindValue(4, $inc_number, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour Colors update procedural
function updateColor($id, $color, $description, $is_enabled, $inc_number) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Colors SET color = ?, description = ?, is_enabled = ?, inc_number = ? WHERE id = ?');
    $query->bindValue(':color', $color, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':is_enabled', $is_enabled, PDO::PARAM_INT);
    $query->bindValue(':inc_number', $inc_number, PDO::PARAM_INT);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour Colors delete procedural
function deleteColor($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Colors WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}
  