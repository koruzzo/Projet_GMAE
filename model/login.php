<?php
// On démarre une session
session_start();

// Data
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_ADD_SLASHES);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_ADD_SLASHES);
//$hash = password_hash($password, PASSWORD_DEFAULT);

// Connexion à la BDD
require('connect-bdd.php');

// Requête pour vérifier l'existance de data admin
$sql_admin = "SELECT * FROM user_admin WHERE admin_username='$username'";
$req_admin = $bdd->query($sql_admin); // Execution de la requête
$res_admin = $req_admin->fetch(PDO::FETCH_ASSOC); // Lecture du résultat de la requête

// Si la requête renvoi un résultat
if ($res_admin) {
    // Vérification du password avec le hash stocké en BDD
    $passwordCheck = password_verify($password, $res_admin['admin_password']);
    
    // Si la reqûete trouve l'email et que le password correspond
    if ($passwordCheck) {
        
        // Enregistrement des infos du user connecté
        $_SESSION['admin'] = array(
            'id' => $res_admin['id_admin'],
            'username' => $res_admin['admin_username']
        );
        // Rediriger vers le dashbord du user
        header('Location: ../view/admin.php');
        exit();
    }
}

// Requête pour vérifier l'existance de data user
$sql_user = "SELECT * FROM users WHERE username='$username'";

$req_user = $bdd->query($sql_user); // Execution de la requête
$res_user = $req_user->fetch(PDO::FETCH_ASSOC); // Lecture du résultat de la requête

// Si la requête renvoi un résultat
if ($res_user) {
    // Vérification du password avec le hash stocké en BDD
    $passwordCheck = password_verify($password, $res_user['password']);

    // Si la reqûete trouve l'email et que le password correspond
    if ($passwordCheck) {
        // Enregistrement des infos du user connecté
        $_SESSION['user'] = array(
            'id' => $res_user['id_user'],
            'username' => $res_user['username'],
        );
        // Rediriger vers le dashbord du user
        if($res_user['pre_connect'] === 1){
            var_dump($res_user['pre_connect']);
            header('Location: ../view/inscription.php');
            exit(); 
        }
        header('Location: ../view/dashboard.php');
        exit();
    }
}




// Redirection par défaut
$_SESSION['error'] = "Identifiants invalides !";
// Sinon : on redirige vers une page d'erreur.
header('Location: ../view/erreur.php');
exit;
