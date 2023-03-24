<?php  
    ob_start();
    $msg = "";
    $title = "Le filRouge contact";
    if (isset($_POST['submit'])) {
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message']) &&
            !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $contact = contact($nom, $prenom, $email, $message);
            if ($contact) {
                $msg = "Votre message a bien été envoyé";
            } else {
                $msg = "Erreur";
            }
        }
    }
?>

    <h1>Nous contacter</h1>
    <form action="contact.php" method="post">
        <!-- <input type="hidden" name="token" value="<?php// echo $token; ?>"> -->
        <div class="form-group">        
            <input type="text" name="nom" placeholder="Nom">
        </div>
        <div class="form-group">        
            <input type="text" name="prenom" placeholder="Prénom">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" name="message" placeholder="Message">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="form-group">
            <input type="submit" value="Envoyer">
        </div>
    </form>
    
<?php $content = ob_get_clean();?>
<?php require('layout.php') ?>  
