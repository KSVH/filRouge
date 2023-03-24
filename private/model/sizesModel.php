<?php
// requetes SQL pour Sizes select procedural
function getSizes() {
    $db = dbConnect();
    $getSizes = $db->query('SELECT * FROM Sizes');
    return $getSizes->fetchAll();
}

function getSizeById($id) {
    $db = dbConnect();
    $getSizeById = $db->prepare('SELECT * FROM Sizes WHERE id = ?');
    $getSizeById->bindValue(':id', $id, PDO::PARAM_INT);
    $getSizeById->execute();
    return $getSizeById->fetch();
}
// requetes SQL pour Sizes insert into procedural
function addSize($size, $inc_number, $description, $is_enabled) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Sizes (size, inc_number, description, is_enabled) VALUES (?, ?, ?, ?)');
    $query->bindValue(1, $size, PDO::PARAM_STR);
    $query->bindValue(2, $inc_number, PDO::PARAM_INT);
    $query->bindValue(3, $description, PDO::PARAM_STR);
    $query->bindValue(4, $is_enabled, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour Sizes update procedural
function updateSize($id, $size, $inc_number, $description, $is_enabled) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Sizes SET size = ?, inc_number = ?, description, is_enabled = ? WHERE id = ?');
    $query->bindValue(':size', $size, PDO::PARAM_STR);
    $query->bindValue(':inc_number', $inc_number, PDO::PARAM_INT);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':is_enabled', $is_enabled, PDO::PARAM_INT);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour Sizes delete procedural
function deleteSize($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Sizes WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}



// ACHTUNG !!! IL FAUDRA RAJOUTER LES BINDVALUES DANS LES REQUETES SQL PARTOUT DANS LE CODE !!! VORSICHT 