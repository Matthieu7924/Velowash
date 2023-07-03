<?php
$env = getenv('APP_ENV') ?: 'dev';

if ($env === 'prod') {
    // Configuration pour l'environnement de production
    $databaseUrl = getenv('DATABASE_URL');
    // Utilisez la variable $databaseUrl pour la connexion à votre base de données
}
else {
    $bdd = new PDO('sqlite:SRC/database/chat.db');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}