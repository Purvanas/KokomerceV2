<?php
namespace Fr\Ensitech\Tpjsf\Entity;

class Adresse {
    private $id;
    private $numero;
    private $ville;
    private $codePostale;
    private $adresse;
    private $userId;
    private $utilisateur; // Assuming User is another class, you should include it

    public function __construct($numero, $ville, $codePostale, $utilisateur) {
        $this->numero = $numero;
        $this->ville = $ville;
        $this->codePostale = $codePostale;
        $this->utilisateur = $utilisateur;
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // ... similar getters and setters for other properties

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }
}
?>