<?php
ob_start();
    $title = "Le filRouge addCategory";
    $msg="";
    if(isset($_POST['submit'])){
        if ((!isset($_POST['name']) || empty($_POST['name']))
        || (!isset($_POST['description']) || empty($_POST['description']))
        || (!isset($_POST['is_enabled']) || empty($_POST['is_enabled']))){           
            echo 'Il faut faut remplir tous les champs pour soumettre le formulaire.';
            exit;
    } else {
        $name = strip_tags($_POST['name']);
        $description = strip_tags($_POST['description']);
        $is_enabled = strip_tags($_POST['is_enabled']);
        $id_parent = strip_tags($_POST['id_parent']);

		$query = 'INSERT INTO categories(name, description, is_enabled, id_parent) VALUES (:name, :description, :is_enabled, :id_parent)';
		$req = $db->prepare($query);
		$req->bindValue(':name', $name, PDO::PARAM_STR);
		$req->bindValue(':description', $description, PDO::PARAM_STR);
        $req->bindValue(':is_enabled', $is_enabled, PDO::PARAM_INT);
        $req->bindValue(':id_parent', $id_parent, PDO::PARAM_INT);
		$req->execute();
		
        if (isset($_FILES['photos']) && $_FILES['photos']['error'] == 0) {
            if ($_FILES['photos']['size'] <= 2000000) {
                $fileInfo = pathinfo($_FILES['photos']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions)) {
                    $extension = $fileInfo['extension'];
                    $fileInfo = pathinfo($_FILES['photos']['name']);
                    $nom = $fileInfo['filename'];
                    $file = $nom . time() .'.' . $extension;
                    $chemin = 'uploads/'.$file;
                    move_uploaded_file($_FILES['photos']['tmp_name'], 'uploads/' . $file);
                    $query = 'INSERT INTO photos(nom, chemin) VALUES (:nom, :chemin)';
                    $req = $db->prepare($query);
                    $req->bindValue(':nom', $file, PDO::PARAM_STR);
                    $req->bindValue(':chemin', $chemin, PDO::PARAM_STR);
                    $req->execute();

                } else {
                    // faire les cas d'echec
                    $msg = "Le format du fichier n'est pas autorisé";
                }
            } else {
                $msg = "Le fichier dépasse la taille autorisée";
            }
        } else {
            $msg="Votre categorie a bien été enregistrée.";
        }
        
	}
}
?>


<div class="container">
    <div class="row">
        <form action="#">
            <label for="nom">Nom :</label>
            <input type="text" name="nom">
            <label for="description">Description :</label>
            <input type="text" name="description">
            <label for="is_enabled">is_enabled</label>
            <input type="number" name="is_enabled">
            <label for="id_parent">id_parent (si sous-catégorie)</label>
            <input type="number" name="id_parent">
            <label for="photos">Photo :</label>
            <input type="file" name="photos">
            <input type="submit" name="submit" value="Envoyer">
        </form>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require('layout.php');
?>