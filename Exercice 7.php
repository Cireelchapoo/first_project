<?php
$nombre = (int)readline("Entrez un nombre : ");
$diviseurs = 0;

for ($i = 1; $i < $nombre; $i++) {
    if ($nombre % $i == 0) {
        $diviseurs += $i;
    }
}

if ($diviseurs == $nombre) {
    echo "$nombre est un nombre parfait.";
} else {
    echo "$nombre n'est pas un nombre parfait.";
}
?>