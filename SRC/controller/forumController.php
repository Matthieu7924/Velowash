<?php

if (
    // isset($_POST["pseudo"])and 
    isset($_POST["content"])
    and isset($_POST["room_id"])
) {
    $Message = new \Messenger\Messages(
        $_SESSION["login"],
        $_POST["content"],
        $_POST["room_id"]
    );
    $messManager->insert($Message);
    echo "Message enregistré";
    // header("admin.php");
}

$allcateg = $bdd->query('SELECT * FROM categories ORDER BY name');
$allroom = $bdd->query('SELECT * FROM room ORDER BY name');
// $msgParPage =10;

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $currentPage = (int) strip_tags($_GET['p']);
} else {
    $currentPage = 1;
}

// $allmsg = $bdd->query('SELECT * FROM messages ORDER BY id DESC LIMIT 10, 10;');

$totalmsg = $bdd->query('SELECT COUNT(*)AS nb_msg FROM messages');
$result = $totalmsg->fetch();
$nb_msg = (int)$result['nb_msg'];

//nombre de messages diffusés sur chaque page
$parPage = 10;

//nombre de pages d'affichage
$pages = ceil($nb_msg / $parPage);

// echo "<p>Total pages: $pages</p>";
$_GET["p"] = $currentPage;
// echo "<p>Current pages: $currentPage</p>";
// echo $currentPage;

// var_dump($_GET);

//Calcul du 1er article de la page
$firstMsg = ($currentPage * $parPage) - $parPage;

// echo $currentPage;
// echo $premier;
// echo $parPage;

$sql = 'SELECT * FROM messages ORDER BY id DESC LIMIT :premier, :parpage;';
$query = $bdd->prepare($sql);
$query->bindValue(':premier', $firstMsg, PDO::PARAM_INT);
$query->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$query->execute();
$allmsg = $query->fetchAll(PDO::FETCH_ASSOC);


$avLog=$_SESSION['login'];
// $sql2 = 'SELECT avatar FROM users';
$sql2 = 'SELECT avatar FROM users WHERE pseudo=:pseudo';
$query2 = $bdd->prepare($sql2);
$query2->bindValue(':pseudo', $avLog, PDO::PARAM_STR);
$query2->execute();
$allNullAvat=$query2->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($allNullAvat);
// echo "</pre>";

// echo "<pre>";
// var_dump($allNullAvat['avatar']);
// echo "</pre>";

echo "<pre>";
foreach($allNullAvat as $nullAvat){
    var_dump($nullAvat['avatar']);
}
echo "</pre>";

// echo "<pre>";
// var_dump($ava);
// echo "</pre>";

// echo "<pre>";
// var_dump($ava['avatar']);
// echo "</pre>";

// $l=$_SESSION['login'];

// echo "<pre>";
// var_dump($allNullAvat[$l]);
// echo "</pre>";





require_once realpath("SRC/Views/forum.php");

