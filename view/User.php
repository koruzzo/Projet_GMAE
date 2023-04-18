<?php
// Config PHP
    session_start();
    // Check user IS NOT connected
    if (!isset($_SESSION['user'])) {
        // Redirection
        header('Location: ../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/link_view.php'); ?>

    <title>Page inscription</title>
</head>

<body >
<?php require('template/header.php'); ?>

    <section class="secModifier">
        <form action="../model/modif_profil_user.php" method="POST" class="form formModification">
            <input type="text" class="input" placeholder="Nom" name="name" required>
            <input type="text" class="input" placeholder="Prénom" name="lastname" required>
            <div class="divPassModifier">
                <label for="#" class="text-Modifier">changer de mot de passe:</label>
                <input type="password" class="input" placeholder="Mot de passe" name="password" required>
            </div>
            <input type="text" class="input questionSecréte" placeholder=" Question secrète " name="quessecrete" value="">
            <input type="text" class="input reponseSecrete" placeholder="Réponse question secrète" name="ressecrete" required>
            <input type="submit" class="submit submitModifier" name="submitModifier" value="Modifier">
        </form>
    </section>

 
    <?php
    
    require("template/footer.php");
    ?>
</body>

</html>