<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styless.css">
    <title>Confirmation d'Adresse</title>
</head>
<body>

<div class="container">
    <?php
    require_once('../configuration/connection.php');
    require_once('../fonctions/validation.php');
    require_once("../fonctions/Crud.php");
    session_start();

    $addressNB = isset($_SESSION["number1"]["addressNB"]) ? $_SESSION["number1"]["addressNB"] : 0;
    for ($i = 1; $i <= $addressNB; $i++) {
        $newAddressData = [
            "street" => $_SESSION["formData"]["street$i"],
            "street_nb" => $_SESSION["formData"]["street_nb$i"],
            "type" => $_SESSION["formData"]["type$i"],
            "city" => $_SESSION["formData"]["city$i"],
            "zipcode" => $_SESSION["formData"]["zipcode$i"],
        ];

        // Ajouter l'adresse dans la base de données
        createAddress($newAddressData);

        // Afficher le message de succès
        echo "<p class='success-message'>L'adresse $i est ajoutée.</p>";
    }
    ?>

    <br><br>
    <br><br>

    <p> cliquez sur le lien ci-dessous si vous voulez ajouter plus d'adresses.</p>
    <a href="..index.php" class="return-link">Retour</a>
</div>

</body>
</html>
