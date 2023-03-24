<?php $title = "Le filRouge readProduct"; ?>
<?php ob_start(); ?>

    <h1>Read Product</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Photos</th>
                <th>Product</th>
                <th>Description</th>
                <th>Price</th>
                <th>Ident_product</th>
                <th>is_enabled</th>
                <th>id_discount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><img src="<?= //$product['photo'] ?>" alt="photo" width="200" height="200"></td>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['ident_product'] ?></td>
                    <td><?= $product['id_discount'] ?></td>
                    <td><?= $product['is_enabled'] ?></td>
                    <td>
                        <a href="updateProduct.php?id=<?= $product['id'] ?>">Update</a>
                        <a href="deleteProduct.php?id=<?= $product['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $content = ob_clean();?>
<?php require('layout.php') ?> 