<?php
function majusculePremierCaractere(&$tableau) {
    foreach ($tableau as &$element) {
        $element = ucfirst(strtolower($element));
    }
}

$chaines = array("AppLe", "BaNaNa", "ChERry");
majusculePremierCaractere($chaines);
print_r($chaines);
?>