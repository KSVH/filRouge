<?php $title = "Le filRouge showCategories"; ?>
<?php ob_start(); ?>

<h1>Le super filRouge !</h1>
<p>filRougeParagraph</p>

<?php
    foreach ($categories as $category) {
?>

<div class="categories">
    <h3>
        <?= htmlspecialchars($category['name']); ?>
        <em>le <?= $category['description']; ?></em>
    </h3>
    <p>
        <img src="<?= nl2br(htmlspecialchars($photo['path'])); ?>" alt="img">
        <br />
        <em><a href="index.php?action=post&id=<?= urlencode($post['identifier'])?>">
        Commentaires</a></em>
    </p>
</div>

<?php
    }
?>

<?php $content = ob_get_clean();?>

<?php require('layout.php') ?>