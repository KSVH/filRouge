<?php $title = "Le filRouge homepage"; ?>
<?php ob_start(); ?>

    <h1>Update product</h1>
    <form action="updateProduct.php" method="post">
        <!-- <input type="hidden" name="token" value="<?php// echo $token; ?>"> -->
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $product['name'] ?>">
        <label for="description">Description</label>
        <input type="text" name="description" value="<?= $product['description'] ?>">
        <label for="price">Price</label>
        <input type="text" name="price" value="<?= $product['price'] ?>">
        <label for="is_enabled">Is enabled</label>
        <input type="text" name="is_enabled" value="<?= $product['is_enabled'] ?>">
        <input type="submit" value="Update">
    </form>
    
<?php ob_clean();?>
<?php require('layout.php') ?>