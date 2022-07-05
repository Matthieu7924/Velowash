<?php

require_once realpath("SRC/config/settings.php");

function getRoute():string{
$defaultControllerPath='SRC/controller/';
$routesName = array_keys(AVAILABLE_ROUTES);
$path=realpath($defaultControllerPath . AVAILABLE_ROUTES["home"]);
if(isset($_GET["page"])&& !empty($_GET)&&in_array($_GET["page"],$routesName, true)){
    $path=realpath($defaultControllerPath . AVAILABLE_ROUTES[$_GET["page"]]);
}
else{
    $path=realpath($defaultControllerPath . AVAILABLE_ROUTES["home"]);
}
return $path;
}



