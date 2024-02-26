<?php
$nombre = (int)readline("Entrez un nombre : ");

echo "Les diviseurs de $nombre sont : ";
for ($i = 1; $i <= $nombre; $i++) {
    if ($nombre % $i == 0) {
        echo "$i ";
    }
}
?>


























