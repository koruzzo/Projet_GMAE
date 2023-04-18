<?php
    session_start();
    
    // Destruction de la session
    session_destroy();

    // Redirection
    header('Location: ../index.php');
    exit;