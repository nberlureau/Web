<?php

try
{
    // Connexion à la abase de données
    // Modifiez les valeurs suivantes selon vos besoins
    // (host, dbname, user, password)
    // Le nom de votre base de données doit correspondre à celui que vous avez créé dans phpMyAdmin.

    $host = "localhost";
    $dbname = "lacosina";
    $user = "root";
    $password = "";
    
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
}
catch (Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}