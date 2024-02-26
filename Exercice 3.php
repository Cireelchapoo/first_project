Avec l'instruction while
<?php
$nombre_initial = 789; // Remplacez ceci par un nombre de trois chiffres

$tirages = 0;
$resultat = 0;

while ($resultat != $nombre_initial) {
    $resultat = mt_rand(100, 999);
    $tirages++;
}

echo "Nombre initial : $nombre_initial\n";
echo "Nombre de tirages nécessaires : $tirages";
?>
Utilisation de l'instruction for
<?php
$nombre_initial = 789; // Remplacez ceci par un nombre de trois chiffres

$resultat = 0;

for ($tirages = 0; $resultat != $nombre_initial; $tirages++) {
    $resultat = mt_rand(100, 999);
}

echo "Nombre initial : $nombre_initial\n";
echo "Nombre de tirages nécessaires : $tirages";
?>