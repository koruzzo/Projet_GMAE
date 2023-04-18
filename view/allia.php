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
        <title>GMAE - ALLIA</title>
        <!-- Link-->
        <?php include('template/link_view.php'); ?>
    </head>
    <body>

    <?php require('template/header.php'); ?>

        <!-- Page content-->

        <div class="separateur"></div>

        <div class="ensemble">
     
            <div class="logo_nom_contenu">

                <img src="../public/ALLIA.png" class="logo_page_partenaire">
                <div class="texte_presentation_partenaire">
                    <h1>ALLIA</h1>
                    <p>ALLIA accompagne les entreprises dans leurs démarches en terme d’assurance.</p>
                    <p>
                    Son président est élu pour 3 ans par ses pairs, chefs d’entreprises et présidents de tous les ALLIA de France.

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
