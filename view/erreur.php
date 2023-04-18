<?php
// Config PHP
    session_start();

    // Check user IS NOT connected
    if (!isset($_SESSION['user'])) {
        // Redirection
        header('Location: ../index.php');
        exit();
    }
    else if (!isset($_SESSION['admin'])) {
        // Redirection
        header('Location: ../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('template/link_view.php'); ?>

    <title>Erreur</title>
</head>


    <body>
        <?php require('template/header.php'); ?>

        <h1>Une erreur est survenue...</h1>
        <?php if(isset($_SESSION['error'])): ?>
        <p> <?= $_SESSION['error'] ?> </p>
        <?php  $_SESSION['error'] = null; ?>
        <?php endif ?>
 
        <?php
        require("template/footer.php");
        ?>
    </body>


</html>