<?php
function pgcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function ppcm($a, $b) {
    return ($a * $b) / pgcd($a, $b);
}

$entier1 = (int)readline("Entrez le premier entier : ");
$entier2 = (int)readline("Entrez le deuxième entier : ");

$ppcm_result = ppcm($entier1, $entier2);

echo "Le PPCM de $entier1 et $entier2 est : $ppcm_result";
?>