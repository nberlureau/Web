<div class="row">
    <!-- Boucle permettant de lister les recettes -->
    <div class="col-4 p-2">
        <!-- Utilisation des Cards Bootstrap -->
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"><?php echo $recipe['titre']; ?></h1>
                <p class="card-text"><?php echo $recipe['description']; ?></p>
                Auteur : <a href="mailto:<?php echo $recipe['auteur']; ?>"><?php echo $recipe['auteur']; ?></a>
            </div>
        </div>
    </div>
</div>

<a href="?c=home" class="btn btn-primary">Retour à l'accueil</a>