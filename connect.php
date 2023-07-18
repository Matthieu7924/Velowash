<?php
$env = getenv('APP_ENV') ?: 'dev';

if ($env === 'prod') {
    // Configuration pour l'environnement de production
    // $databaseUrl = getenv('DATABASE_URL');
    $databaseUrl = getenv('CLEARDB_DATABASE_URL');
    $url = parse_url($databaseUrl);

    $bdd = new PDO(
        'mysql:host=' . $url['host'] . ';dbname=' . substr($url['path'], 1),
        $url['user'],
        $url['pass']
    );
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Utilisez la variable $databaseUrl pour la connexion à votre base de données
}
else {
    // Configuration pour l'environnement de développement local
    $bdd = new PDO('sqlite:SRC/database/chat.db');

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}