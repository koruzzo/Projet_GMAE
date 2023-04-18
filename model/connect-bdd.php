<?php

    $host       =   "localhost";
    $dbname     =   "bdd_gmae";
    $user       =   "root";
    $pass       =   "";

    try
    {
        $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $error)
    {
        //Debug
        //var_dumb($error);
        //die;
        header('Location: ../view/erreur.php');
        exit;
    }

?>