Formulaire (HTML - index.html):
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Adresse Client</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <fieldset>
            <legend>Adresse client</legend>
            Nom: <input type="text" name="nom"><br>
            Prénom: <input type="text" name="prenom"><br>
            Adresse: <input type="text" name="adresse"><br>
            Ville: <input type="text" name="ville"><br>
            Code Postal: <input type="text" name="code_postal"><br>
        </fieldset>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>

Traitement PHP (traitement.php):
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du Traitement</title>
</head>
<body>
    <h2>Données du client :</h2>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
        </tr>
        <tr>
            <td><?php echo $_POST["nom"]; ?></td>
            <td><?php echo $_POST["prenom"]; ?></td>
            <td><?php echo $_POST["adresse"]; ?></td>
            <td><?php echo $_POST["ville"]; ?></td>
            <td><?php echo $_POST["code_postal"]; ?></td>
        </tr>
    </table>
</body>
</html>