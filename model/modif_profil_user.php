<?php

session_start();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_ADD_SLASHES);
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_ADD_SLASHES);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_ADD_SLASHES);
$quessecrete = filter_input(INPUT_POST, 'quessecrete', FILTER_SANITIZE_ADD_SLASHES);
$ressecrete = filter_input(INPUT_POST, 'ressecrete', FILTER_SANITIZE_ADD_SLASHES);

$hash = password_hash($password, PASSWORD_DEFAULT);

require('connect-bdd.php');

$idUser = $_SESSION['user']['id'];

$sql = "UPDATE users SET 
        `prenom`  = '$name',
        `nom`  = '$lastname',
        `password` = '$hash',
        `question` = '$quessecrete',
        `reponse` = '$ressecrete'

        WHERE id_user = '$idUser'
    ";
$req = $bdd->query($sql); // Execution de la requête
$res = $req->rowCount(); // Comptage des lignes modifiées
    // Lorsqu'au moins une ligne est modifiée
if ($res) {
    // Mise à jour de la session (seulement les infos concernées)
    $_SESSION['user']['prenom'] = $name;
    $_SESSION['user']['nom'] = $lastname;
    $_SESSION['user']['question'] = $quessecrete;
    $_SESSION['user']['reponse'] = $ressecrete;
    header('Location: ../view/dashboard.php');
    exit();

}