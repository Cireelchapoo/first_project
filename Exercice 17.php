<?php
function afficherTableauXHTML($tableau) {
    echo "<table border='1'>";
    echo "<tr>";
    foreach ($tableau as $cle => $valeur) {
        echo "<th>$cle</th>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($tableau as $valeur) {
        echo "<td>$valeur</td>";
    }
    echo