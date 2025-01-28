// Écoute le chargement du DOM
document.addEventListener('DOMContentLoaded', () => {
    
    //Sélectionne toutes les recettes avec la classe 'recipe'
    let recipes = document.querySelectorAll('.recipe');

    //Ajoute un écouteur d'événements sur chaque recette
    recipes.forEach((recipe) => {
        
        recipe.addEventListener('mouseover', (event) => {
            recipe.computedStyleMap.backgroundColor = 'lightgray'; // Ajoute un fond gris lorssque la souris passe dessus la
            // recette 500ms après la survolée 500ms avant l'événement click
        });
        recipe.addEventListener('mouseout', (event) => {
            recipe.computedStyleMap.backgroundColor = ''; // Retire le fond gris lorssque la souris passe dessus la
            // recette
        });

        recipe.addEventListener('click', (event) => {
            event.preventDefault(); // Empêche le comportement para défaut
            let recipeId = recipe.dataset.id;

            window.open('?c=detail&id=' + recipeId, '_self');
        });
    });
});