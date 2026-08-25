<?php

// Test de connexion
try
{
    // Renseigner les identifiants uniquement dans l'environnement local.
    $bdd = new PDO('mysql:host=localhost;dbname=blablafpa;charset=utf8', 'blablafpa', 'CHANGE_ME');
  
}

// Gestion des erreurs
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
