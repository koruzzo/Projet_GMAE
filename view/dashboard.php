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
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Accueil</title>
        <!-- Link-->
        <?php include('template/link_view.php'); ?>
    </head>
    <body>

    <?php require('template/header.php'); ?>

        <!-- Page content-->
        
        <div class="separateur"></div>

        <h1>Présentation de l'entreprise</h1>
        <div class="speech_presentation">

            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est inventore voluptatem blanditiis eum adipisci repudiandae, magni at explicabo delectus quos, unde possimus placeat quas sed minus molestiae molestias porro labore.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est inventore voluptatem blanditiis eum adipisci repudiandae, magni at explicabo delectus quos, unde possimus placeat quas sed minus molestiae molestias porro labore.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est inventore voluptatem blanditiis eum adipisci repudiandae, magni at explicabo delectus quos, unde possimus placeat quas sed minus molestiae molestias porro labore.
        </div>

        <div class="separateur"></div>

        <h2>Partenaires</h2>

        <div class="liste_partenaire">

            <div class="partenaire">

                <img src="../public/ASSURISKlogo.png" class="logo">
                <h3>ASSURISK</h3>
                <p class="desc">ASSURISK est le leader français de l’assurance en ligne. Nous vous proposons l’offre et...</p>
                <a href="assurisk.php">
                <div class="bouton_ensavoirplus">Afficher la suite</div>
                </a>

            </div>

            <div class="partenaire">

                <img src="../public/ALLIA.png" class="logo">
                <h3>ALLIA</h3>
                <p class="desc">ALLIA accompagne les entreprises dans leurs démarches en terme d’assurance. Son président...</p>
                <a href="allia.php">
                <div class="bouton_ensavoirplus">Afficher la suite</div>
                </a>

            </div>

            <div class="partenaire">

                <img src="../public/les-mutualistes.png" class="logo">
                <h3>Les mutualistes</h3>
                <p class="desc">Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier</p>
                <a href="les_mutualistes.php">
                <div class="bouton_ensavoirplus">Afficher la suite</div>
                </a>

            </div>

            <div class="partenaire">

                <img src="../public/OCAR.png" class="logo">
                <h3>OCAR</h3>
                <p class="desc">OCAR est une compagnie d’assurance qui est présente sur tout le territoire. Nous proposons une solution clé...</p>
                <a href="ocar.php">
                <div class="bouton_ensavoirplus">Afficher la suite</div>
                </a>


            </div>
             <?php require('template/affiche_assu.php') ?>
        </div>

        

        <?php

require("template/footer.php");
?>

        <!-- Script -->
        <?php include('template/script.php'); ?>
    </body>
</html>
