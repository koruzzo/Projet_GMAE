<?php

session_start();
require('connect-bdd.php');

$id_assu = $_GET['id'];

$commentaire = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_ADD_SLASHES);

$sql_comm = "SELECT * FROM commentaire ";
$req_comm = $bdd->query($sql_comm); // Execution de la requête
$res_comm = $req_comm->fetch(PDO::FETCH_ASSOC); // Lecture du résultat de la requête


$idUser = $_SESSION['user']['id'];



$sql = "INSERT INTO commentaire (commentaire, id_assu, id_user) VALUES ('$commentaire', '$id_assu', '$idUser')";

    $req = $bdd->query($sql); // Execution de la requête
    $res = $req->rowCount(); // Comptage des lignes insérées


header('Location: ../view/article.php?id='.$id_assu);
exit();