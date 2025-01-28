<?php
    // lien vers la vue home

class contactController{
    // fonction permettant d'afficher la page de contact
    function contact(){
        require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.'Contact'.DIRECTORY_SEPARATOR.'contact.php';
    }

    // fonction permettant d'enregistrer un contact
    function enregistrerContact($pdo){
        // récupération des données de formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $description = $_POST['description'];

        // préparatino de la requête d'insertion dans la base de données

        /** @var PDO $pdo */
        $requete = $pdo->prepare('INSERT INTO contact (nom, email, description) VALUES (:nom, :email, :description)');
        $requete->bindParam(':nom', $nom);
        $requete->bindParam(':email', $email);
        $requete->bindParam(':description', $description);
        
        // execution de la requête
        $ajoutOk=$requete->execute();

        if($ajoutOk){
            // redirection vers la vue d'enregistrement effectué
            require_once(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.'Contact'.DIRECTORY_SEPARATOR.'enregistrerContact.php');
        }else{
            echo 'Erreur lors de l\'enregistrement';
        }
    }
}