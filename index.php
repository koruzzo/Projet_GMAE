 <?php
    // Config PHP
    session_start();

    // Check user IS connected
    if (isset($_SESSION['user'])) {
        // Redirection
        header('Location: view/dashboard.php');
        exit();
    }
    else if (isset($_SESSION['admin'])) {
      // Redirection
      header('Location: view/admin.php');
      exit();
  }
?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include('view/template/link_index.php'); ?>


    <title>Page login</title>
</head>
<body class="bodyLoginInscription">
  <section class="secLogin">
    <form action="model/login.php" method="POST" class="form formLogin">
      <div>
      <img src="public/logo_GMAE-1.png" alt="" class="GMAE-Logo"></div>
      <input type="text" name="username" class="input inputUser" placeholder="Pseudo" required>
      <input type="password" name="password" class="input inputPass" placeholder="Mot de passe" required>
      <!-- <label for="">Nouvel utilisateur? <a href="inscription.php">S'inscrire</a></label> -->
      <input type="submit" name="submit" value="Connexion" class="submit submitLogin">
    </form>
  </section>
 
</body>
</html>