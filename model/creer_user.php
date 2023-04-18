<?php
session_start();

class User {
    
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


// //-------------------------------------------------------------------------------------------
    

    public function save() {
    require('connect-bdd.php');

    

    $stmt = $bdd->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
    $stmt->execute([
        'username' => $this->username,
        'password' => $this->password
    ]);
    }
}

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_ADD_SLASHES);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_ADD_SLASHES);

$hash = password_hash($password, PASSWORD_DEFAULT);

$user = new User($username, $hash);
$user->save();

header('Location: ../view/admin.php');
exit();