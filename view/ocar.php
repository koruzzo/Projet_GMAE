
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
        <title>GMAE - OCAR</title>
        <!-- Link-->
        <?php include('template/link_view.php'); ?>
    </head>
    <body>

    <?php require('template/header.php'); ?>

        <!-- Page content-->

        <div class="separateur"></div>

        <div class="ensemble">
     
            <div class="logo_nom_contenu">

                <img src="../public/OCAR.png" class="logo_page_partenaire">
                <div class="texte_presentation_partenaire">
                    <h1>OCAR</h1>
                    <p> OCAR est une compagnie d’assurance qui est présente sur tout le territoire.</p>
                    <p>
                    Nous proposons une solution clé en main et une mise en place entièrement gratuite allant d’un simple lien tracké à une intégration totale dans votre parcours de vente.
                    Bénéficiez d’un espace dédié pour suivre à tout moment le nombre de devis effectués, de contrats souscrits et votre rémunération en cours. Le reste, c’est pour nous. On s’occupe de toute la gestion du contrat : de la résiliation chez l’ancien assureur à la gestion des sinistres en cas de pépin.
                    Une rémunération qui s’adapte à vous. Recevez une commission fixe ou un pourcentage en fonction du nombre de devis effectués ou de contrats souscrits.
          
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
