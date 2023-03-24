<?php
    ob_start();
    $title = "Le filRouge addPhoto";
    $msg="";

    if(isset($_POST['submit'])){
        if (isset($_FILES['photos']) && $_FILES['photos']['error'] == 0 && $_POST['nom'] != NULL) {
            if ($_FILES['photos']['size'] <= 2000000) {
                $fileInfo = pathinfo($_FILES['photos']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions)) {
                    $extension = $fileInfo['extension'];
                    // $fileInfo = pathinfo($_FILES['photos']['name']);
                    // $nom = $fileInfo['filename'];
                    // $file = time() . $nom . '.' . $extension;
                    $nom = $_POST['name'];
                    $file = $nom . ' . ' . $extension;
                    $chemin = 'uploads/'.$file;
                    move_uploaded_file($_FILES['photos']['tmp_name'], 'uploads/' . $file);
                    $query = 'INSERT INTO photos(name, path) VALUES (:name, :path)';
                    $req = $db->prepare($query);
                    $req->bindValue(':name', $file, PDO::PARAM_STR);
                    $req->bindValue(':path', $chemin, PDO::PARAM_STR);
                    $req->execute();

                } else {
                    // faire les cas d'echec
                    $msg = "Le format du fichier n'est pas autorisé";
                }
            } else {
                $msg = "Le fichier dépasse la taille autorisée";
            }
        } else {
            $msg="Votre photo a bien été enregistrée.";
        }
        
	};

?>


<?php $title = "Le filRouge homepage"; ?>
<?php ob_start(); ?>

    <h1>Saisie Image</h1>

    <form action="#" enctype="multipart/form-data">
        <!-- <input type="hidden" name="token" value="<?php// echo $token; ?>"> -->
        <label for="nomPhoto">Nom :</label>
        <input type="text" name="nom">
        
        
        <label for="photos">Photo :</label>
        <input type="file" name="photos">
    </form> 

<?php $content = ob_get_clean();?>
<?php require('layout.php') ?>    