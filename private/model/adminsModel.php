<?php
// requetes SQL pour Admins select procedural
function getAdmins() {
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Admins');
    return $query->fetchAll();
}

function getAdminsById($id) {
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM Admins WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}
// requetes SQL pour Admins insert into procedural
function addAdmin($email, $password) {
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Admins (email, password) VALUES (?, ?)');
    $query->bindValue(1, $email, PDO::PARAM_STR);
    $query->bindValue(2, $password, PDO::PARAM_STR);
    $query->execute();
}
// requetes SQL pour Admins update procedural
function updateAdmin($id, $email, $password) {
    $db = dbConnect();
    $query = $db->prepare('UPDATE Admins SET email = ?, password = ? WHERE id = ?');
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}

// requetes SQL pour Admins delete procedural
function deleteAdmin($id) {
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM Admins WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}
  