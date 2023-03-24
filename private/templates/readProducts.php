<?php $title = "Le filRouge readProducts"; ?>
<?php ob_start(); ?>

    <h1>Read Products</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Ident_product</th>
                <th>is_enabled</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= substr($product['description'], 0, 50) ?></td>
                    <td><?= $product['ident_product'] ?></td>
                    <td><?= $product['is_enabled'] ?></td>
                    <td>
                        <a href="updateProduct.php?id=<?= $product['id'] ?>">Update</a>
                        <a href="deleteProduct.php?id=<?= $product['id'] ?>">Delete</a>
                        <a href="readProduct.php?id=<?= $product['id'] ?>">Voir détails</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $content = ob_get_clean();?>
<?php require('layout.php') ?> 