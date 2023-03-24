<?php $title = "Le filRouge homepage"; ?>
<?php ob_start(); ?>

    <h1>Shop</h1>
    <div class="product container">
        <?php
            foreach($products as $product) { ?>
                <div class='product'>
                <h2><?=$product['name']?></h2>
                <p><?=$product['description']?></p>
                <p><?=$product['price']?></p>
                <a href='product.php?id="<?=$product['id']?>"'>Voir le produit</a>
                <a href='cart.php?id="<?=$product['id']?>"'>Ajouter au panier</a>
                </div>
        <?php } ?>

    </div>

<?php $content = ob_get_clean();?>
<?php require('layout.php') ?> 