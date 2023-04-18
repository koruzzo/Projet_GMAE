<?php 

session_start();

$id_assu = filter_input(INPUT_POST, 'SupprimerPartenaire', FILTER_SANITIZE_ADD_SLASHES);

require('connect-bdd.php');


$sql = "DELETE FROM assurance WHERE id_assu  = '$id_assu'";
$req = $bdd->query($sql);
header('Location: ../view/admin.php');
exit();