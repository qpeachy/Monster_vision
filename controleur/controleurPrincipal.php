<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["expo"] = "Exposition.php";
    $lesActions["visite"] = "visite.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";

    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}

?>