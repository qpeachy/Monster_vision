<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/bd.expo.inc.php";

$expo=getExpos();

$titre="Expositions";
include "$racine/vue/entete.html.php";
include "$racine/vue/vueExposition.php";
include "$racine/vue/pied.html.php";

