<?php
function getProductColorSize() 
{
    $db = dbConnect();
    $sql = "SELECT p.id AS product_id, p.name AS product_name, p.description AS product_description, p.price AS product_price,
                 c.id AS color_id, c.color AS color_name, c.description AS color_description,
                 s.id AS size_id, s.size AS size_name, s.description AS size_description
          FROM products p
          INNER JOIN product_color_size pcs ON pcs.product_id = p.id
          INNER JOIN colors c ON c.id = pcs.color_id
          INNER JOIN sizes s ON s.id = pcs.size_id
          WHERE p.is_enabled = 1 AND c.is_enabled = 1 AND s.is_enabled = 1";
  
    $getProductColorSize = $db->prepare($sql);
    $getProductColorSize->execute();
  
    return $getProductColorSize->fetchAll(PDO::FETCH_ASSOC);
}

function getProductColorSizeBis() 
{
    $db = dbConnect();
    $sql = "SELECT p.id AS product_id, 
        p.name AS product_name, 
        p.description AS product_description, 
        p.price AS product_price,
        c.id AS color_id, 
        c.color AS color_name, 
        c.hexcode AS color_hexcode, 
        c.description AS color_description,
        s.id AS size_id, 
        s.size AS size_name, 
        s.description AS size_description
        FROM products p
        INNER JOIN product_color_size pcs ON pcs.product_id = p.id
        INNER JOIN colors c ON c.id = pcs.color_id
        INNER JOIN sizes s ON s.id = pcs.size_id
        WHERE p.is_enabled = 1 AND c.is_enabled = 1 AND s.is_enabled = 1;";
    $getProductColorSizeBis = $db->prepare($sql);
    $getProductColorSizeBis->execute();
    return $getProductColorSizeBis->fetchAll(PDO::FETCH_ASSOC);
}

function addProductColorSize($product_id, $color_id, $size_id) {
    $db = dbConnect();
    $sql = "INSERT INTO product_color_size (product_id, color_id, size_id) VALUES (:product_id, :color_id, :size_id)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->bindValue(':color_id', $color_id, PDO::PARAM_INT);
    $stmt->bindValue(':size_id', $size_id, PDO::PARAM_INT);
    $stmt->execute();

}

function updateProductColorSize($product_id, $color_id, $size_id) {
    $db = dbConnect();
    $sql = "UPDATE product_color_size SET product_id = :product_id, color_id = :color_id, size_id = :size_id WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->bindValue(':color_id', $color_id, PDO::PARAM_INT);
    $stmt->bindValue(':size_id', $size_id, PDO::PARAM_INT);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

function deleteProductColorSize($product_id, $color_id, $size_id) {
    $db = dbConnect();
    $sql = "DELETE FROM product_color_size WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

// Parcours des résultats pour affichage ou traitement ultérieur
// foreach ($results as $result) {
//     echo 'ID produit: ' . $result['product_id'] . '<br>';
//     echo 'Nom produit: ' . $result['product_name'] . '<br>';
//     echo 'Description produit: ' . $result['product_description'] . '<br>';
//     echo 'Prix produit: ' . $result['product_price'] . '<br>';
//     echo 'ID couleur: ' . $result['color_id'] . '<br>';
//     echo 'Nom couleur: ' . $result['color_name'] . '<br>';
//     echo 'Description couleur: ' . $result['color_description'] . '<br>';
//     echo 'ID taille: ' . $result['size_id'] . '<br>';
//     echo 'Nom taille: ' . $result['size_name'] . '<br>';
//     echo 'Description taille: ' . $result['size_description'] . '<br>';
//     echo '<hr>';
// }
