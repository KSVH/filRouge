<?php
    ob_start();
    $title = "Le filRouge addProduct";


?>
<!-- formulaire avec les options size et color -->
<h1>Ajout Produit</h1>
<form action="#" enctype="multipart/form-data">
    <label class="form-label" for="category">Catégorie de produit :</label>
    <select name="category" id="category">
        <option class ="form-control" value="">Sélectionnez une catégorie</option>

        <?php foreach($categories as $category) { ?>
            <option class ="form-control" value="<?=$category['id']?>"><?=$category['name']?></option>
        <?php } ?>
    </select>
    <br>
    <label class="form-label" for="subCategory">Sous-catégorie de produit :</label>
    <select name="subCategory" id="subCategory">
        <option class ="form-control" value="">Sélectionnez une sous-catégorie</option>

        <?php foreach($allSubCategories as $subCategory) { ?>
            <option class ="form-control" value="<?=$subCategory['id']?>"><?=$subCategory['name']?></option>
        <?php } ?>
    </select>
    <br>
    <label class="form-label"  for="name">Nom du produit :</label>
    <input class ="form-control" type="text" name="name" id="name">
    <br>
    <label class="form-label"  for="price">prix du produit :</label>
    <input class ="form-control" type="text" name="price" id="price">
    <br>
    <label class="form-label"  for="description">Description du produit :</label>
    <input class ="form-control" type="text" name="description" id="description">
    <br>
    <label class="form-label"  for="size">Taille du produit :</label>
        <select name="size" id="size">
        <option class ="form-control" value="">Sélectionnez une taille</option>
    <?php foreach ($sizes as $size) { ?>       
            <option class ="form-control" value="<?= $size['id'] ?>"><?= $size['size'] ?></option>
        
    <?php } ?>
    </select>
    <br>
    <label class="form-label"  for="color">Couleur du produit :</label>
        <select name="color" id="color">
        <option value="" class ="form-control">Sélectionnez une couleur</option>
    <?php foreach ($colors as $color) { ?>       
            <option class ="form-control" value="<?= $color['id'] ?>"><?= $color['color'] ?></option>
        
    <?php } ?>
    </select>
    <br>  
    <label class="form-label" for="pictureName">Nom de l'image :</label>
    <input class ="form-control" type="text" name="pictureName" id="pictureName">
    <br>
    <label  class="form-label" for="formFileMultiple">Image du produit :</label>
    <input class ="form-control" type="file" name="pictures[]" id="formFileMultiple">
    <br>
    <input class ="form-control" type="submit" value="Envoyer">
</form>
 <br>
 <?= $msg ?>
<?php $content = ob_get_clean();?>
<?php require('layout.php') // faire en sorte qu'en fonction de la categ choisie les sous categ possible s'affiche dans le select suivant ?>  