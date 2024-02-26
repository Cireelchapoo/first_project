Utilisation de foreach<?php
foreach ($personnes as $nom => $details) {
    echo "Nom: $nom\n";
    echo "Prénom: " . $details["prénom"] . "\n";
    echo "Ville: " . $details["ville"] . "\n";
    echo "Âge: " . $details["âge"] . "\n\n";
}
?>