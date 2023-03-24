<?php $title = "Le filRouge homepage"; ?>
<?php ob_start(); ?>

<h1>Le super filRouge !</h1>
<p>filRougeParagraph</p>

<!-- 
<?php

    foreach ($categories as $category) {
?>
-->

<div class="categories">
    <h3>
        <?php $category['name']; ?>
        <em>le <?php  $category['description']; ?></em>
    </h3>
    <p>
        <img src="<?php // nl2br(htmlspecialchars($photo['path'])); ?>" alt="img">
        <br />
        <!-- <em><a href="index.php?action=post&id=<?php //urlencode($post['identifier'])?>">
        Commentaires</a></em> -->
    </p>
</div>

<!-- <?php
    }
?>

<?php $content = ob_get_clean();?>

<?php require('layout.php') ?> -->

