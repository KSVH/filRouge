<?php $title = "Le filRouge homepage"; ?>
<?php ob_start(); ?>
    <h1>Update photo</h1>
    <?php
        $id = $_GET['id'];
        $photo = $photoManager->getPhotoById($id);
    ?>
    <form action="updatePhoto.php" method="POST">
        <!-- <input type="hidden" name="token" value="<?php// echo $token; ?>"> -->
        <input type="hidden" name="id" value="<?= $photo['id'] ?>">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="<?= $photo['name'] ?>">
        <label for="path">Path :</label>
        <input type="text" name="path" value="<?= $photo['path'] ?>">
        <label for="is_enabled">Is_enabled :</label>
        <select name="is_enabled">
            <option value="1" <?= $photo['is_enabled'] == 1 ? 'selected' : '' ?>>Activer</option>
            <option value="0" <?= $photo['is_enabled'] == 0 ? 'selected' : '' ?>>Désactiver</option>
        </select>
        <input type="submit" value="Update">
    </form>
<?php ob_clean();?>
<?php require('layout.php') ?>

