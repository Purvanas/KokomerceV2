<?php
namespace Fr\Ensitech\Tpjsf\Entity;

class Adresse {
    private $numero;
    private $ville;
    private $codePostale; // 'codePostale' devrait être 'codePostal'
    private $adresse;
    private $userId;

    public function __construct($numero, $ville, $codePostal, $utilisateur) {
        $this->numero = $numero;
        $this->ville = $ville;
        $this->codePostale = $codePostal; // 'codePostale' devrait être 'codePostal'
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function getCodePostal() { // 'codePostale' devrait être 'codePostal'
        return $this->codePostale;
    }

    public function setCodePostal($codePostal) { // 'codePostale' devrait être 'codePostal'
        $this->codePostale = $codePostal;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }
}
?>
