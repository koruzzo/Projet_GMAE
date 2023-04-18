<?php 

session_start();

$id_user = filter_input(INPUT_POST, 'SupprimerUtilisateur', FILTER_SANITIZE_ADD_SLASHES);

require('connect-bdd.php');


$sql = "DELETE FROM users WHERE id_user  = '$id_user'";
$req = $bdd->query($sql);
header('Location: ../view/admin.php');
exit();