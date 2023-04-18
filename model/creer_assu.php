<?php
session_start();

class Assu {
    
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getname() {
        return $this->name;
    }

    public function setname($name) {
        $this->name = $name;
    }

    public function getdescription() {
        return $this->description;
    }

    public function setdescription($description) {
        $this->description = $description;
    }


// //-------------------------------------------------------------------------------------------
    

    public function save() {
    require('connect-bdd.php');

    

    $stmt = $bdd->prepare('INSERT INTO assurance (nom_assu, desc_assu) VALUES (:nom_assu, :desc_assu)');
    $stmt->execute([
        'nom_assu' => $this->name,
        'desc_assu' => $this->description
    ]);
    }
}

$name = filter_input(INPUT_POST, 'nomPartenaire', FILTER_SANITIZE_ADD_SLASHES);
$description = filter_input(INPUT_POST, 'ajouterPartenaire', FILTER_SANITIZE_ADD_SLASHES);



$assu = new Assu($name, $description);
$assu->save();

header('Location: ../view/admin.php');
exit();