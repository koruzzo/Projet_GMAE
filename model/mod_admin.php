<?php 
session_start();


$username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_ADD_SLASHES);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_ADD_SLASHES);

$hash = password_hash($password, PASSWORD_DEFAULT);
require('connect-bdd.php');


$idUser = $_SESSION['admin']['id'];

$sql = "UPDATE user_admin SET 
        `admin_username`  = '$username',
        `admin_password` = '$hash'
        WHERE id_admin = '$idUser'
    ";
$req = $bdd->query($sql); // Execution de la requête
$res = $req->rowCount(); // Comptage des lignes modifiées
    // Lorsqu'au moins une ligne est modifiée
if ($res) {
    // Mise à jour de la session (seulement les infos concernées)
    $_SESSION['admin']['username'] = $username;
    header('Location: ../view/admin.php');
    exit();

}
