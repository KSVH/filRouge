<?php $title = "Le filRouge monCompte"; ?>
<?php ob_start(); ?>

    <h1>Mon compte</h1>

    <table>
    <tr>
        <td>Identifiant:</td>
        <td><?= $user['id'] ?></td>
    </tr>
    <tr>
        <td>Profil:</td>
        <td><?= $user['profile'] ?></td>
    </tr>
    <tr>
        <td>Genre:</td>
        <td><?= $user['gender'] ?></td>
    </tr>
    <tr>
        <td>Nom:</td>
        <td><?= $user['name'] ?></td>
    </tr>
    <tr>
        <td>Prénom:</td>
        <td><?= $user['first_name'] ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?= $user['email'] ?></td>
    </tr>
    <tr>
        <td>Mot de passe:</td>
        <td><?= $user['password'] ?></td>
    </tr>
    <tr>
        <td>Date de naissance:</td>
        <td><?= $user['birth_date'] ?></td>
    </tr>
    <tr>
        <td>Téléphone:</td>
        <td><?= $user['phone_number'] ?></td>
    </tr>
    <tr>
        <td>Rue:</td>
        <td><?= $user['street'] ?></td>
    </tr>
    <tr>
        <td>Numéro de rue:</td>
        <td><?= $user['street_number'] ?></td>
    </tr>
    <tr>
        <td>Numéro d'appartement:</td>
        <td><?= $user['apartment_number'] ?></td>
    </tr>
    <tr>
        <td>Code pays:</td>
        <td><?= $user['country_code'] ?></td>
    </tr>
    <tr>
        <td>Ville:</td>
        <td><?= $user['city'] ?></td>
    </tr>
</table>

    
<?php $content = ob_get_clean();?>
<?php require('layout.php') ?>  

// FAIRE UN FORM ICI