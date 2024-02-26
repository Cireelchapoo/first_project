<?php
$rayon = (float)readline("Entrez le rayon du cercle : ");

$diametre = 2 * $rayon;
$perimetre = 2 * M_PI * $rayon;
$surface = M_PI * pow($rayon, 2);

echo "Diamètre : $diametre\n";
echo "Périmètre : $perimètre\n";
echo "Surface : $surface";
?>