<?php

require_once 'model.php';

$action = $_GET['action'] ?? null;

if ($action === 'showUsers') {
    $users = getUsers();
    include 'readUsers.php';
} elseif ($action === 'showUser') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $user = getUserById($id);
        if ($user) {
            include 'readUser.php';
        } else {
            echo 'Utilisateur non trouvé';
        }
    } else {
        echo 'ID de l\'utilisateur non spécifié';
    }
} elseif ($action === 'addUser') {
    $name = $_POST['name'] ?? null;
    if ($name) {
        $result = addUser($name);
        if ($result) {
            header('Location: index.php?action=showUsers');
            exit;
        } else {
            echo 'Erreur lors de l\'ajout de l\'utilisateur';
        }
    } else {
        include 'addUser.php';
    }
} elseif ($action === 'updateUser') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $user = getUserById($id);
        if ($user) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'] ?? null;
                $result = updateUser($id, $name);
                if ($result) {
                    header('Location: index.php?action=showUsers');
                    exit;
                } else {
                    echo 'Erreur lors de la mise à jour de l\'utilisateur';
                }
            } else {
                include 'updateUser.php';
            }
        } else {
            echo 'Utilisateur non trouvé';
        }
    } else {
        echo 'ID de l\'utilisateur non spécifié';
    }
} elseif ($action === 'deleteUser') {
    $id = $_GET['id'] ?? null;
    if ($id) {
        $result = deleteUser($id);
        if ($result) {
            header('Location: index.php?action=showUsers');
            exit;
        } else {
            echo 'Erreur lors de la suppression de l\'utilisateur';
        }
    } else {
        echo 'ID de l\'utilisateur non spécifié';
    }
} else {
    $users = getUsers();
    include 'readUsers.php';
}
