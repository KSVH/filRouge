<?php
    header('Location: public/index.php');
    exit(); // pour s'assurer que le code ne s'exécute pas après le header()

    // lorsqu'un visiteur arrive, on lui crée un $ident_client qu'on stocke en session, à ce moment, soit il a un compte, ou pas.
    // il parcourt le site, remplit le panier, et lorsqu'il veut passer commande, soit il est deja co, soit on lui demande de se connecter ou de créer un compte.
    // si il est déjà co on stocke en session son mail, on insère dans le panier son ident_client, on génère son ident_order ( time() ), on passe à la confirmation de la commande => faire un devis
    // si il a un compte mais qu'il n'est pas loggué on lui demande de se connecter, on stocke en session son mail, on insère dans le panier son ident_client, on génère son ident_order ( time() ), on passe à la confirmation de la commande => faire un devis
    // si il n'a pas de compte, on lui demande de créer un compte.
    // Penser à faire des mails de confirmation de commande, de création de compte,de panier, de devis, de commande, de paiement, de livraison, de retour, de réclamation, de contact, de newsletterde promotion, de code promo .... 

    // MODIFIER LA BDD AVEC LES CHAMPS AJOUTES