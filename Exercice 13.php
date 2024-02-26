Formulaire avec calcul TVA (HTML - calcul_tva.html):
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
</head>
<body>
    <form action="calcul_tva.php" method="post">
        Prix HT: <input type="text" name="prix_ht" value="<?php echo isset($_POST['prix_ht']) ? $_POST['prix_ht'] : ''; ?>"><br>
        Taux TVA (%): <input type="text" name="taux_tva" value="<?php echo isset($_POST['taux_tva']) ? $_POST['taux_tva'] : ''; ?>"><br>
        <input type="submit" value="Calculer">
    </form>
</body>
</html>

Calcul TVA (PHP - calcul_tva.php):
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du Calcul TVA</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prix_ht = floatval($_POST["prix_ht"]);
        $taux_tva = floatval($_POST["taux_tva"]);

        $montant_tva = ($prix_ht * $taux_tva) / 100;
        $prix_ttc = $prix_ht + $montant_tva;
    ?>
    <h2>Résultats du calcul :</h2>
    <p>Montant TVA: <?php echo $montant_tva; ?> euros</p>
    <p>Prix TTC: <?php echo $prix_ttc; ?> euros</p>
    <?php
    }
    ?>
</body>
</html>