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
        <title>GMAE - Les mutualistes</title>
        <!-- Link-->
        <?php include('template/link_view.php'); ?>
    </head>
    <body>

    <?php require('template/header.php'); ?>

        <!-- Page content-->

        <div class="separateur"></div>

        <div class="ensemble">
     
            <div class="logo_nom_contenu">

                <img src="../public/les-mutualistes.png" class="logo_page_partenaire">
                <div class="texte_presentation_partenaire">
                    <h1>Les mutualistes</h1>
                    <p> LES + MUTUALISTES finance la solidarité nationale.
                Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale.</p>
                    <p>
                    Chez LES + MUTUALISTES, chacun cotise selon ses moyens et reçoit selon ses besoins.
                LES + MUTUALISTES est ouvert à tous, sans considération d’âge ou d’état de santé.
                Nous garantissons un accès aux soins et une retraite.
                Chaque année, nous collectons et répartissons 300 milliards d’euros.
                Notre mission est double :
                ⦁	Sociale : nous garantissons la fiabilité des données sociales ;
                ⦁	Économique : nous apportons une contribution aux activités économiques.

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
