session_start();
<?php
    // import de la classe RecetteController
    require_once(__DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR.'RecetteController.php');
   
    // import de la classe contactController
    require_once(__DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR.'contactController.php');

    //connexion à la base de données

require_once(__DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Models'.DIRECTORY_SEPARATOR.'connectDb.php');
    // ajout de l'en tête

require_once(__DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.'Page'.DIRECTORY_SEPARATOR.'header.php');
    // mise en place de la route actuelle

$route = isset($_GET['c'])? $_GET['c'] : 'home';
$id = isset($_GET['id'])? $_GET['id'] : null;

    // dispatch des routes

switch($route){
    case 'home':
        require_once(__DIR__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR.'homeController.php');
        break;
    
    case 'contact':
        $contactController = new contactController();
        $contactController->contact();
        break;
    
    case 'recette':
        $recetteController = new RecetteController();
        $recetteController->ajouter();
        break;

    case 'enregistrer':
        $recetteController = new RecetteController();
        $recetteController->enregistrer($pdo);
        break;

    case 'enregistrerContact':
        $contactController = new contactController();
        $contactController->enregistrerContact($pdo);
        break;

    case 'liste_recettes':
        $recetteController = new RecetteController();
        if (isset($_GET['id'])) {
            $recetteController->detail($pdo, $id);
        }else{
            $recetteController->lister($pdo);
        }
        break;
}

    // ajout du pied de page

require_once(__Dir__.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.'Page'.DIRECTORY_SEPARATOR.'footer.php');
