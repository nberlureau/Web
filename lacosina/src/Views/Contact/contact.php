<div class="container">
<h1>Nous contacter</h1>
    <form action="?c=enregistrerContact" method="post">
        <div class="mb-3">
            <label for="nom" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="nom" name="nom"required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Votre mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" id="enregistrer">Enregistrer</button>
        </div>
    </form>
</div>

<div class="caption">
    Texte de la page de contact
</div>

</body>
</html>

