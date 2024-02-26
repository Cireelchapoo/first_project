Utilisation de while
<?php
$keys = array_keys($personnes);
$count = count($keys);
$i = 0;

while ($i < $count) {
    $nom = $keys[$i];
    $details = $personnes[$nom];

    echo "Nom: $nom\n";
    echo "Prénom: " . $details["prénom"] . "\n";
    echo "Ville: " . $details["ville"] . "\n";
    echo "Âge: " . $details["âge"] . "\n\n";

    $i++;
}
?>