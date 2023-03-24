<?php

function getProducts() 
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM products');
    $query->execute();
    $getProducts = $query->fetchAll();
    return $getProducts;
}

function getProduct($id) 
{
    $db = dbConnect();
    $req = $db->prepare('SELECT * FROM products WHERE id = ?');
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $getProduct = $req->fetch();
    return $getProduct;
}

function addProduct($name, $gender, $description, $price, $ident_product, $is_enabled, $id_category)
{
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Products (name, gender, description, price, ident_product, is_enabled, id_category, id_discount) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $query->bindValue(1, $name, PDO::PARAM_STR);
    $query->bindValue(2, $gender, PDO::PARAM_STR);
    $query->bindValue(3, $description, PDO::PARAM_STR);
    $query->bindValue(4, $price, PDO::PARAM_INT);
    $query->bindValue(5, $ident_product, PDO::PARAM_INT);
    $query->bindValue(6, $is_enabled, PDO::PARAM_INT);
    $query->bindValue(7, $id_category, PDO::PARAM_INT);
    $query->execute();
}

function updateProduct($id, $name, $gender, $description, $price, $ident_product, $is_enabled, $id_category)
{
    $db = dbConnect();
    $query = $db->prepare('UPDATE Products SET name = ?, gender = ?, description = ?, price = ?, ident_product = ?, is_enabled = ?, id_category = ? WHERE id = ?');
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':gender', $gender, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':price', $price, PDO::PARAM_INT);
    $query->bindValue(':ident_product', $ident_product, PDO::PARAM_INT);
    $query->bindValue(':is_enabled', $is_enabled, PDO::PARAM_INT);
    $query->bindValue(':id_category', $id_category, PDO::PARAM_INT);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
}

// fonction pour récupérer les produits par catégorie, recherche, prix, catégorie et recherche, prix et recherche, prix et catégorie,catégorie et recherche
function getProductsByCategory($category_id) 
{
    $db = dbConnect();
    $getProductsByCategory = $db->prepare('SELECT * FROM products WHERE category_id = ?');
    $getProductsByCategory->bindValue(':category_id', $category_id, PDO::PARAM_INT);
    $getProductsByCategory->execute(array($category_id));
    return $getProductsByCategory;
}
function getProductsByGender($gender)
{
    $db = dbConnect();
    $getProductsByGender = $db->prepare('SELECT * FROM products WHERE gender = ?');
    $getProductsByGender->execute(array($gender));
    return $getProductsByGender;
}

function getProductsBySearch($search) 
{
    $db = dbConnect();
    $getProductsBySearch = $db->prepare('SELECT * FROM products WHERE name LIKE ?');
    $getProductsBySearch->execute(array('%' . $search . '%'));
    return $getProductsBySearch;
}

function getProductsByPrice($min, $max) 
{
    $db = dbConnect();
    $getProductsByPrice = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ?');
    $getProductsByPrice->execute(array($min, $max));
    return $getProductsByPrice;
}

function getProductsByPriceAndCategory($min, $max, $id) 
{
    $db = dbConnect();
    $getProductsByPriceAndCategory = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND id_category = ?');
    $getProductsByPriceAndCategory->execute(array($min, $max, $id));
    return $getProductsByPriceAndCategory;
}

function getProductsByPriceAndSearch($min, $max, $search) 
{
    $db = dbConnect();
    $getProductsByPriceAndSearch = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND name LIKE ?');
    $getProductsByPriceAndSearch->execute(array($min, $max, '%' . $search . '%'));
    return $getProductsByPriceAndSearch;
}

function getProductsByCategoryAndSearch($id, $search) 
{
    $db = dbConnect();
    $getProductsByCategoryAndSearch = $db->prepare('SELECT * FROM products WHERE id_category = ? AND name LIKE ?');
    $getProductsByCategoryAndSearch->execute(array($id, '%' . $search . '%'));
    return $getProductsByCategoryAndSearch;
}
function getProductsByPriceAndCategoryAndSearch($min, $max, $id, $search) 
{
    $db = dbConnect();
    $getProductsByPriceAndCategoryAndSearch = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND id_category = ? AND name LIKE ?');
    $getProductsByPriceAndCategoryAndSearch->execute(array($min, $max, $id, '%' . $search . '%'));
    return $getProductsByPriceAndCategoryAndSearch;
}

function getProductsByPriceAndCategoryAndSearchAndOrder($min, $max, $id, $search, $order) 
{
    $db = dbConnect();
    $getProductsByPriceAndCategoryAndSearchAndOrder = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND id_category = ? AND name LIKE ? ORDER BY price ' . $order);
    $getProductsByPriceAndCategoryAndSearchAndOrder->execute(array($min, $max, $id, '%' . $search . '%'));
    return $getProductsByPriceAndCategoryAndSearchAndOrder;
}

function getProductsByPriceAndCategoryAndOrder($min, $max, $id, $order) 
{
    $db = dbConnect();
    $getProductsByPriceAndCategoryAndOrder = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND id_category = ? ORDER BY price ' . $order);
    $getProductsByPriceAndCategoryAndOrder->execute(array($min, $max, $id));
    return $getProductsByPriceAndCategoryAndOrder;
}

function getProductsByPriceAndSearchAndOrder($min, $max, $search, $order) 
{
    $db = dbConnect();
    $getProductsByPriceAndSearchAndOrder = $db->prepare('SELECT * FROM products WHERE price BETWEEN ? AND ? AND name LIKE ? ORDER BY price ' . $order);
    $getProductsByPriceAndSearchAndOrder->execute(array($min, $max, '%' . $search . '%'));
    return $getProductsByPriceAndSearchAndOrder;
}


// Action pour afficher tous les produits
function showProducts()
{
    $products = getProducts();
    include 'readProducts.php';
}

// Action pour afficher un produit spécifique en fonction de son ID
function showProduct($id)
{
    $product = getProduct($id);
    include 'readProduct.php';
}
// Action pour afficher les produits par catégorie
function showProductsByCategory($id)
{
    $products = getProductsByCategory($id);
    include 'readProducts.php';
}
// Action pour afficher les produits par recherche
function showProductsBySearch($search)
{
    $products = getProductsBySearch($search);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix
function showProductsByPrice($min, $max)
{
    $products = getProductsByPrice($min, $max);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix et catégorie
function showProductsByPriceAndCategory($min, $max, $id)
{
    $products = getProductsByPriceAndCategory($min, $max, $id);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix et recherche
function showProductsByPriceAndSearch($min, $max, $search)
{
    $products = getProductsByPriceAndSearch($min, $max, $search);
    include 'readProducts.php';
}
// Action pour afficher les produits par catégorie et recherche
function showProductsByCategoryAndSearch($id, $search)
{
    $products = getProductsByCategoryAndSearch($id, $search);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix, catégorie et recherche
function showProductsByPriceAndCategoryAndSearch($min, $max, $id, $search)
{
    $products = getProductsByPriceAndCategoryAndSearch($min, $max, $id, $search);
    include 'readProducts.php';
}
function getProductsByColor() 
{

}
// Action pour afficher les produits par prix, catégorie, recherche et ordre
function showProductsByPriceAndCategoryAndSearchAndOrder($min, $max, $id, $search, $order)
{
    $products = getProductsByPriceAndCategoryAndSearchAndOrder($min, $max, $id, $search, $order);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix, catégorie et ordre
function showProductsByPriceAndCategoryAndOrder($min, $max, $id, $order)
{
    $products = getProductsByPriceAndCategoryAndOrder($min, $max, $id, $order);
    include 'readProducts.php';
}
// Action pour afficher les produits par prix, recherche et ordre
function showProductsByPriceAndSearchAndOrder($min, $max, $search, $order)
{
    $products = getProductsByPriceAndSearchAndOrder($min, $max, $search, $order);
    include 'readProducts.php';
}
// Action pour supprimer un produit en fonction de son ID
function deleteProduct($id) {
    $db = dbConnect();
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}



// MODIFIER LA DELETEPRODUCT() !!!! 
// RAJOUTER PARTOUT DES MODALE POUR DEMANDER CONFIRMATION A LA SUPPRESSION