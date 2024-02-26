Formulaire Agence Immobilière (HTML - agence_immobiliere.html):
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Agence Immobilière</title>
</head>
<body>
    <form action="traitement_agence.php" method="post">
        <input type="submit" name="action" value="Vendre">
        <input type="submit" name="action" value="Acheter">
        <input type="submit" name="action" value="Louer">
    </form>
</body>
</html>

Traitement Agence Immobilière (PHP - traitement_agence.php):
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    switch ($action) {
        case "Vendre":
            header("Location: page_vendre.php");
            break;
        case "Acheter":
            header("Location: page_acheter.php");
            break;
        case "Louer":
            header("Location: page_louer.php");
            break;
        default:
            echo "Action non reconnue.";
            break;
    }
}
?>