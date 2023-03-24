<?php
// requetes SQL pour Photos select procedural
function getPhotos() {
    $db = dbConnect();
    $getPhotos = $db->query('SELECT * FROM Photos');
    return $getPhotos->fetchAll();
}

function getPhotoById($id) {
    $db = dbConnect();
    $getPhotoById = $db->prepare('SELECT * FROM Photos WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $getPhotoById->execute();
    return $getPhotoById->fetch();
}
// requetes SQL pour Photos insert into procedural
function addPhoto($name, $path, $is_enabled) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Photos (name, path, is_enabled) VALUES (?, ?, ?)');
    $query->bindValue(1, $name, PDO::PARAM_STR);
    $query->bindValue(2, $path, PDO::PARAM_STR);
    $query->bindValue(3, $is_enabled, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour Photos update procedural
function updatePhoto($id, $name, $path, $is_enabled) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Photos SET name = ?, path = ?, is_enabled = ? WHERE id = ?');
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':path', $path, PDO::PARAM_STR);
    $query->bindValue(':is_enabled', $is_enabled, PDO::PARAM_INT);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}
// requetes SQL pour Photos delete procedural
function deletePhoto($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Photos WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $deletePhoto = $query->execute();
}
  