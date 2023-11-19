<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style3.css">
    <title>Formulaire d'Adresse</title>
</head>
<body>

<div class="container">
    <form method="POST" action="../results/resultat.php">
        <?php
        session_start();
        $addressNB = isset($_SESSION["number1"]["addressNB"]) ? $_SESSION["number1"]["addressNB"] : 0;
        //modification avec des champs preremplies
        for ($i = 1; $i <= $addressNB; $i++) {
            ?>
            <div class="form-group">
                <input type="hidden" name="action" value="addressForm">
                <center><h3>Adresse <?php echo $i; ?> </h3></center>
                <label for="street<?php echo $i; ?>">Street:</label>
                <input type="text" id="street<?php echo $i; ?>" name="street<?php echo $i; ?>"
                       value="<?php echo isset($_SESSION["formData"]["street$i"]) ? $_SESSION["formData"]["street$i"] : "" ?>">
                <br>
                <label for="street_nb<?php echo $i; ?>">Street number:</label>
                <input type="number" id="street_nb<?php echo $i; ?>" name="street_nb<?php echo $i; ?>"
                       value="<?php echo isset($_SESSION["formData"]["street_nb$i"]) ? $_SESSION["formData"]["street_nb$i"] : "" ?>">
                <br>
                <label for="type<?php echo $i; ?>">Type:</label>
                <select id="type<?php echo $i; ?>" name="type<?php echo $i; ?>">
                    <option value="facturation" <?php echo (isset($_SESSION["formData"]["type$i"]) && $_SESSION["formData"]["type$i"] == "facturation") ? "selected" : ""; ?>>Facturation</option>
                    <option value="livraison" <?php echo (isset($_SESSION["formData"]["type$i"]) && $_SESSION["formData"]["type$i"] == "livraison") ? "selected" : ""; ?>>Livraison</option>
                    <option value="autre" <?php echo (isset($_SESSION["formData"]["type$i"]) && $_SESSION["formData"]["type$i"] == "autre") ? "selected" : ""; ?>>Autre</option>
                </select>
                <br>
                <label for="city<?php echo $i; ?>">City:</label>
                <select id="city<?php echo $i; ?>" name="city<?php echo $i; ?>">
                    <option value="Montreal" <?php echo (isset($_SESSION["formData"]["city$i"]) && $_SESSION["formData"]["city$i"] == "Montreal") ? "selected" : ""; ?>>Montreal</option>
                    <option value="Quebec" <?php echo (isset($_SESSION["formData"]["city$i"]) && $_SESSION["formData"]["city$i"] == "Quebec") ? "selected" : ""; ?>>Quebec</option>
                    <option value="Toronto" <?php echo (isset($_SESSION["formData"]["city$i"]) && $_SESSION["formData"]["city$i"] == "Toronto") ? "selected" : ""; ?>>Toronto</option>
                    <option value="Ottawa" <?php echo (isset($_SESSION["formData"]["city$i"]) && $_SESSION["formData"]["city$i"] == "Ottawa") ? "selected" : ""; ?>>Ottawa</option>
                    <option value="Laval" <?php echo (isset($_SESSION["formData"]["city$i"]) && $_SESSION["formData"]["city$i"] == "Laval") ? "selected" : ""; ?>>Laval</option>
                    <option value="Longueuil" <?php echo (isset($_SESSION["formData"]["city$i"]) && $_SESSION["formData"]["city$i"] == "Longueuil") ? "selected" : ""; ?>>Longueuil</option>
                </select>
                <br>
                <label for="zipcode<?php echo $i; ?>">Zipcode:</label>
                <input type="text" id="zipcode<?php echo $i; ?>" name="zipcode<?php echo $i; ?>"
                       value="<?php echo isset($_SESSION["formData"]["zipcode$i"]) ? $_SESSION["formData"]["zipcode$i"] : "" ?>">
                <br>
            </div>
        <?php }; ?>
        <center>
            <input type="submit" value="Submit">
        </center>
    </form>
</div>

</body>
</html>
