<?php
    $title = "Le filRouge connexion"; 
    ob_start(); 
?>


    <form action="#" method="post">
        <!-- // hidden input to prevent CSRF -->
        <!-- <input type="hidden" name="token" value="<?php// echo $token; ?>"> -->
        <input type="text" name="email" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Connexion">
    </form>
    
<?php $content = ob_get_clean();?>
<?php require('layout.php') ?>  