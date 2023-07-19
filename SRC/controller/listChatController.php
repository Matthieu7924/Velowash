<?php


$allcateg = $catManager->getCategory();
$allroom = $roomManager->getRoom($allcateg);

require_once realpath("SRC/Views/listChat.php");
?>