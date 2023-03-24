<?php
    ob_start();
    $title = "Le fil rouge Add Admin";
    $msg = "";
    if (isset($_POST['submit']) &&
        isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) &&
        isset($_POST['password']) && !empty($_POST['password']) && preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}$#", $_POST['password'])) {
        
        // vérification de l'existence de l'email dans la base de données
        if (emailExists($email)) {
            // si l'email existe déjà, afficher un message d'erreur et rediriger l'utilisateur vers la page précédente
            $msg = "L'email existe déjà";
            exit;
        } else {
            // insertion des données de l'utilisateur (email et mot de passe haché) dans la base de données
            // affichage d'un message de succès
            // redirection de l'utilisateur vers la page d'accueil ou la page de connexion
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = $db->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
            $query->execute([$email, $password]);
            $msg = "L'admin a été ajouté avec succès";
            exit;
        }
    }
?>

    <h1>Add Admin</h1>
    <form action="#">
        <!-- <input type="hidden" name="token" value="<?php// echo $token; ?>"> -->
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Envoyer">
    </form>

<?php
    $content = ob_get_clean();
    require('layout.php');
?>
