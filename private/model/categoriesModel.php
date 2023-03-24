<?php

// requetes SQL pour categories select procedural
function getCategoriesAndSubCategories() {
    $db = dbConnect();
    $allCategoriesAndSubcategories = $db->query('SELECT * FROM categories');
    return $allCategoriesAndSubcategories->fetchAll();
}

function getSubCategoriesFromACategory($id) {
    $db = dbConnect();
    $subCategoriesFromACategory = $db->prepare('SELECT * FROM Categories WHERE id_parent = ?');
    $subCategoriesFromACategory->execute([
        $id
    ]);
    return $subCategoriesFromACategory->fetchAll();
}

function getAllSubCategories() {
    $db = dbConnect();
    $allSubCategories = $db->query('SELECT * FROM categories WHERE id_parent <> 0');
    return $allSubCategories->fetchAll();
}

function getCategories() {
    $db = dbConnect();
    $categories = $db->query('SELECT * FROM categories WHERE id_parent = 0');
    return $categories->fetchAll();
}

// // requete sql qui selectionne les categories et les sous categories
// function getCategoriesAndSubCategories() {
//     $db = dbConnect();
//     $query = $db->query('SELECT * FROM categories');
//     $categories = $query->fetchAll();
//     foreach ($categories as $key => $category) {
//         $query = $db->prepare('SELECT * FROM sub_categories WHERE id_parent = ?');
//         $query->execute([
//             $category['id']
//         ]);
//         $categories[$key]['sub_categories'] = $query->fetchAll();
//     }
//     return $categories;
// }
function getCategoryById($id) 
{
    $db = dbConnect();
    $categoryById = $db->prepare('SELECT * FROM categories WHERE id = ?');
    $categoryById ->bindValue(':id', $id, PDO::PARAM_INT);
    $categoryById->execute();
    return $categoryById->fetch();
}

function getSubCategoriesByIdParent($id) 
{
    $db = dbConnect();
    $subCategoryByIdParent = $db->prepare('SELECT * FROM categories WHERE id_parent = ?');
    $subCategoryByIdParent->bindValue(':id_parent', $id, PDO::PARAM_INT);
    $subCategoryByIdParent->execute();
    return $subCategoryByIdParent->fetchAll();
}

// requetes SQL pour categories insert into procedural
function addCategory($name, $description, $is_enabled, $id_parent) 
{
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO categories (name, description, is_enabled, id_parent) VALUES (?, ?, ?, ?)');
    $query->bindValue(1, $name, PDO::PARAM_STR);
    $query->bindValue(2, $description, PDO::PARAM_STR);
    $query->bindValue(3, $is_enabled, PDO::PARAM_INT);
    $query->bindValue(4, $id_parent, PDO::PARAM_INT);
    $query->execute();
}

// requetes SQL pour categories update procedural
function updateCategory($name, $description, $is_enabled, $id_parent, $id_photo, $id) 
{
    $db = dbConnect();
    $query = $db->prepare('UPDATE categories SET name = ?, description = ?, is_enabled = ?, id_parent = ?, id_photo = ? WHERE id = ?');
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':is_enabled', $is_enabled, PDO::PARAM_INT);
    $query->bindValue(':id_parent', $id_parent, PDO::PARAM_INT);
    $query->bindValue(':id_photo', $id_photo, PDO::PARAM_INT);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}


// requetes SQL pour categories delete procedural
function deleteCategory($id) 
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM categories WHERE id = ?');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}