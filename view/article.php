<?php
session_start();


// Check user IS NOT connected
if (!isset($_SESSION['user'])) {
    // Redirection
    header('Location: ../index.php');
    exit();
}

require('../model/connect-bdd.php');

if(isset($_GET['id']) AND !empty($_GET['id'])) {
   $get_id = htmlspecialchars($_GET['id']);
   $article = $bdd->prepare('SELECT * FROM assurance WHERE id_assu = ?');
   $article->execute(array($get_id));
   if($article->rowCount() == 1) {
      $article = $article->fetch();
      $id = $article['id_assu'];
      $titre = $article['nom_assu'];
      $contenu = $article['desc_assu'];
      $likes = $bdd->prepare('SELECT id FROM likes WHERE id_article = ?');
      $likes->execute(array($id));
      $likes = $likes->rowCount();
      $dislikes = $bdd->prepare('SELECT id FROM dislikes WHERE id_article = ?');
      $dislikes->execute(array($id));
      $dislikes = $dislikes->rowCount();
   } else {
      die('Cet article n\'existe pas !');
   }
} else {
   die('Erreur');
}
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GMAE - <?= $titre ?></title>
        <!-- Link-->
        <?php include('template/link_view.php'); ?>
    </head>
    <body>

    <?php require('template/header.php'); ?>

        <!-- Page content-->

        <div class="separateur"></div>

        <div class="ensemble">
     
            <div class="logo_nom_contenu">

                <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" class="logo_page_partenaire" alt="..." />
                <div class="texte_presentation_partenaire">
                    <h1><?= $titre ?></h1>
                    <p class="contenu"><?= $contenu ?></p>


                    <div class="separateur"></div>

                    <div class="like_dislike">

                        <a href="../model/action.php?t=1&id=<?= $id ?>">
                        <div class="like"><div class="compteur_like_dislike"><?= $likes ?></div><i class="bi bi-hand-thumbs-up"></i></div>
                        </a>
                        
                        <a href="../model/action.php?t=2&id=<?= $id ?>">
                        <div class="dislike"><div class="compteur_like_dislike"><?= $dislikes ?></div><i class="bi bi-hand-thumbs-down"></i></div>
                        </a>

                    </div>
                    
                </div>

            </div>

           

            

        </div>

        
        <div class="separateur"></div>
        
        <h3 class="comm">Commentaires</h3>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Commenter
</button>


        

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laisser un commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../model/ajouter_comm.php?t=2&id=<?= $id ?>" method="POST">
        <label for="commentaire">Commentaire</label>
        <input type="text" name="commentaire" id="commentaire">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Publier commentaire</button>
      </form>
        </div>
    </div>
  </div>
</div>

<div class="separateur"></div>
<?php 

$message = $bdd->query('SELECT commentaire.commentaire, users.username FROM commentaire INNER JOIN users ON commentaire.id_user = users.id_user INNER JOIN assurance ON commentaire.id_assu  = assurance.id_assu WHERE commentaire.id_assu = "'.$id.'"  ORDER BY id_commentaire DESC');
while($a = $message->fetch()) { ?>

<div class="ensemble">
   
        <h3><?= $a['username'] ?></h3>
        <p class="desc"><?= $a['commentaire'] ?></p>
   
</div>
<div class="separateur"></div>
<?php } ?>


        <?php

require("template/footer.php");
?>
        <!-- Script -->
        <?php include('template/script.php'); ?>
    </body>
</html>