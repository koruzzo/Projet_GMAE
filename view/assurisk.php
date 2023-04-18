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
        <title>GMAE - Assurisk</title>
        <!-- Link-->
        <?php include('template/link_view.php'); ?>
    </head>
    <body>

    <?php require('template/header.php'); ?>

        <!-- Page content-->

        <div class="separateur"></div>

        <div class="ensemble">
     
            <div class="logo_nom_contenu">

                <img src="../public/ASSURISKlogo.png" class="logo_page_partenaire_assurisk">
                <div class="texte_presentation_partenaire">
                    <h1>ASSURISK</h1>
                    <p>Être bien couvert, votre objectif et notre mission.</p>
                    <p>
                        ASSURISK est le leader français de l’assurance en ligne.
                        Nous vous proposons l’offre et les options qui vous correspondent le mieux,
                        soit en ligne, soit avec l’un de nos conseillers au téléphone.

                        Vous avez le choix de passer soit par notre appli ou soit par votre espace personnel sur le site.
                        Mais nous savons que dans ce moment délicat, il est rassurant de parler à quelqu’un :
                        un conseiller spécialisé dans la gestion des sinistres est là pour vous.
                        Il sera votre interlocuteur unique pour vous accompagner dans toutes vos démarches
                        et vous tenir au courant de l’avancée de votre dossier.
                        Vous bénéficiez aussi du large réseau de garages partenaires, d’expert, et de l’assistance
                        de notre Groupe. Une prise en charge 24h/24, 7 jours/7 qui s’appuie sur la performance
                        du 1er groupe mondial d’assurance.
                    </p>


                    <div class="separateur"></div>

                    <div class="like_dislike">

                        <div class="like"><i class="bi bi-hand-thumbs-up"></i></div>
                        <div class="dislike"><i class="bi bi-hand-thumbs-down"></i></div>

                    </div>
                    
                </div>

            </div>

           

            

        </div>
        <?php

require("template/footer.php");
?>
        <!-- Script -->
        <?php include('template/script.php'); ?>
    </body>
</html>
