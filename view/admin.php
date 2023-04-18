<?php
    // Config PHP
    session_start();

    require('../model/connect-bdd.php');

    // Check user IS NOT connected
    if (!isset($_SESSION['admin'])) {
        // Redirection
        header('Location: ../index.php');
        exit();
    }

    $users = $bdd->query('SELECT * FROM users ORDER BY id_user ASC');
    $a = $bdd->query('SELECT * FROM users');

    $assurance = $bdd->query('SELECT * FROM assurance ORDER BY id_assu ASC');
    $b = $bdd->query('SELECT * FROM assurance');
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

<body class="bodyAdmin">
<?php require('template/header.php'); ?>

    <div class="bodyModification">
        <div class="adminInfo1">
            <section class="secModifier">
                <form action="../model/mod_admin.php" method="POST" class="form formModification adminModif" >
                    <h2 class="adminTitles">Modification du profil</h2>
                    <input type="text" class="input" placeholder="admin" name="name" required>
                    <div class="divPassModifier divModifier">
                        <label for="#" class="text-Modifier">changer de mot de passe:</label>
                        <input type="password" class="input" placeholder="Mot de passe" name="password" required>
                    </div>
                    <input type="submit" class="submit submitModifierAdmin" name="submitModifierAdmin" value="Modifier">
                </form>
            </section>
        </div>

        <div class="adminInfo2">

            <section class="secModifier">
                <form action="../model/creer_user.php" method="POST" class="form formModification adminModif">
                    <h2 class="adminTitles">Ajout d’un compte utilisateur</h2>
                    <input type="text" class="input" placeholder="Pseudo" name="username" required>
                    <input type="password" class="input" placeholder="Mot de passe" name="password" required>
                    <input type="submit" class="submit submitAjouterCréer" name="submitCréerCompte" value="Ajouter ">
                </form>
            </section>

            <section class="secModifier">
                <form action="../model/creer_assu.php" method="POST" class="form formModification adminModif">
                    <h2 class="adminTitles">
                        Ajout d’un partenaire
                    </h2>
                    <input type="text" class="input questionSecréte" placeholder=" Nom" name="nomPartenaire" value="">
                    <input type="text" class="input reponseSecrete" placeholder="Description du partenaire" name="ajouterPartenaire" required>
                    <input type="submit" class="submit submitAjouterCréer" name="submitAjouter" value="Ajouter ">
                </form>
            </section>
            <section class="secModifier">
                <form action="../model/sup_user.php" method="POST" class="form formModification adminModif">
                    <h2 class="adminTitles">
                        Suppression d’un compte utilisateur
                    </h2>
                    <div class="divPartenaireUtilisateur">

                        <?php while($a = $users->fetch()) { ?>
                                <div class="liste_users">
                                    <p><?= $a['id_user'] ?></p>
                                    <p><?= $a['username'] ?></p>
                                </div>
                        <?php } ?>

                    </div>
                    <label for="#" class="textSup1">Saisir l’identifiant du compte utilisateur:</label>
                    <input type="text" class="input" name="SupprimerUtilisateur" required>
                    <input type="submit" class="submit submitSupprimer" name="submitSupprimerUtilisateur" value="Supprimer">
                </form>
            </section>
            <section class="secModifier">
                <form action="../model/sup_assu.php" method="POST" class="form formModification adminModif">
                    <h2 class="adminTitles">
                        Suppression d’un partenaire
                    </h2>
                    <div class="divPartenaireModifier">

                        <?php while($b = $assurance->fetch()) { ?>
                                    <div class="liste_users">
                                        <p><?= $b['id_assu'] ?></p>
                                        <p><?= $b['nom_assu'] ?></p>
                                    </div>
                            <?php } ?>

                    </div>
                    <label for="#" class="textSup2">Saisir l’identifiant du partenaire :</label>
                    <input type="text" class="input" name="SupprimerPartenaire" required>
                    <input type="submit" class="submit submitSupprimer" name="submitSupprimerPartenaire" value="Supprimer">
                </form>
            </section>
        </div>
    </div>


        <?php
    require("template/footer.php");
        ?>
</body>

</html>