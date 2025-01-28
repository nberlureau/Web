<?php if (isset($_SESSION['identifiant'])): ?>
    <li class="nav-item">
        <a class="btn btn-outline-dark" href="?c=deconnexion">Deconnexion</a>
    </li>
<?php else: ?>
    <li class="nav-item">
        <a class="btn btn-outline-dark" href="?c=connexion">Connexion</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-dark" href="?c=inscription">Inscription</a>
    </li>
<?php endif; ?>
